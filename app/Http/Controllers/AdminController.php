<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;
use App\Exports\ApplicantListExport;
use App\Imports\ImportList;
use Excel;
use PDF;
use Alert;
use App\Models\Announcement;
use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\RevokeMail;
use App\Mail\AdminMail;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function listOfApplicant()
    {
        $appNo = User::all();
        $app = MainModel::latest()->paginate(5);
        return view('admin.body.application',compact('app'))
        ->with('i',(request()->input('page',1)-1)*5);
        
    }
      
    public function deleteApplicant($user_id){
        //delete MainModel
        $delmain = MainModel::where('user_id','=',$user_id);
        //Mail::to($del->email)->send(new RevokeMail($del));
        $delmain->delete();

        //delete UserModel
        $deluser = User::where('user_id','=',$user_id);
        $deluser->delete();
        
        return back();
    }

    public function displayPDF(){
        $data = MainModel::all();
        return view('admin.export.body.pdfbody',['data'=>$data]);
    }
    public function exportfile(Request $request){
        
        if($request->input('exportFile') == 'csv'){
                
            return Excel::download(new ApplicantListExport,'ListofApplicants.csv');
        }else if($request->input('exportFile') =="pdf"){
            $data = MainModel::all();
            $pdf = PDF::loadView('admin.export.body.pdfbody',compact('data'));
            return $pdf->download('ListofApplicants.pdf');
           
        }else{
            
             return Excel::download(new ApplicantListExport,'ListofApplicants.xlsx');
        }
    }
    public function importfile(Request $request){
         $import = Excel::import(new ImportList,$request->file('file'));
            
            return back()->with('success','Successfully Imported');
      
    }
    public function announcementlist()
    {
        $app = Announcement::latest()->paginate(5);
        $appNo = Announcement::all();
        return view('admin.body.announcementlist',['app'=>$app]);
    }
    public function announcement(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);


        if($request->hasfile('filename'))
         {
            $image = array();
            if($files = $request->file('filename')){
                foreach($files as $file){
                    $image_name = md5(rand(1000,10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = 'images/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path,$image_full_name);
                    $image[] = $image_url;
                }
            }
            Announcement::insert([
                'title' =>$request->title,
                'file' =>implode('|',$image),
                'content' =>$request->content,
            ]);

            return back();
        }
    }   
   
    public function displayAnnouncements(){
        $image = Announcement::all();
   //    $images = explode('|',$image->file);
       
      return view('admin.body.announcement',['anc'=>$image]);
    }
   
    public function deleteAnnouncement($id){
     
        
        $data = Announcement::find($id);
        $files = $data->file;
        $image = explode('|',$files);
        foreach ($image as $a) {
          
           Storage::delete("/".$a);
        }
        $data->delete();
        return back();
    }
    public function createAdmin(Request $request){

        $year = date("Y");
        $latest = MainModel::all()->last()->id;
        $user_admin = User::where('role','=','admin')->count();
        $isEmpty = User::count();
        $latestID = $user_admin + 1;
        $latestID1 = $latestID + 1;
        $adminID = $year.'ADMIN'.'0000'.$latestID1;
        
     //   dd($user_admin);
       $admin = User::create([
            'user_id'=>$adminID,
            'name'=>$request->name,
            'email' =>$request->email,
            'emailVerify_token' =>Str::random(60),
            'password' =>Hash::make($request->password),
            'role' => 'admin',
        ]);
        Mail::to($request->email)->send(new AdminMail($admin));
        Alert::success('Successfuly Registered');
        return back();
    }
    public function showEdit( $id){
        $edit = Announcement::find($id);
        return view('admin.body.editAnnouncement',['edit'=>$edit]);
    }
    public function deleteImage($id,$image){
        $del = Announcement::find($id);
        $newlink = str_replace('images','',$del->file);
        $updatedfile = str_replace('|images/'.$image,'',$del->file);
        
        //$image = MainModel::where('id','=',$id)->first();
        //$image = MainModel::delete('')
        if(substr_count($del->file,'images') == 1){
            Storage::delete("/images/".$newlink);
            $del->file = "";
            $del->update();
            return back();
        }else{
            Storage::delete("/images/".$newlink);
            $del->file = $updatedfile;
            $del->update();
            return back();
        }

    }
    public function updateAnnouncement(Request $request,$id){

        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $annc = Announcement::find($id);

        $currentfile = $annc->file;

        if($request->hasfile('filename'))
         {
            $image = array();
            if($files = $request->file('filename')){
                foreach($files as $file){
                    $image_name = md5(rand(1000,10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = 'images/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path,$image_full_name);
                    $image[] = $image_url;
                }
            }

       
            if($annc->file == "")
            {
                $currentfile .= implode('|',$image);
            }
            else{
                $currentfile .= '|'. implode('|',$image);
            
            }
        
        
         }
         $annc->title = $request->title;
        $annc->content = $request->content;
        $annc->file = $currentfile;
        $annc->update();
        return redirect('/admin/announcement');
    }

    public function displayDashboard(){
        $data['lineChart'] = MainModel::select(\DB::raw("COUNT(*) as count"), \DB::raw("MONTHNAME(created_at) as month_name"),\DB::raw('max(created_at) as createdAt'))
        ->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->orderBy('createdAt')
        ->get();
        //piechart
        $applicants= DB::table('applicants')
        ->select(
         DB::raw('gender as gender'),
         DB::raw('count(*) as number'))
        ->groupBy('gender')
        ->get();
      $array[] = ['Gender', 'Number'];
      
      foreach($applicants as $key => $value)
      {
       $array[++$key] = [$value->gender, $value->number];
      }
      return view('admin.body.dashboard',$data)->with('gender', json_encode($array));
    }
}
