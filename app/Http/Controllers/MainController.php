<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\MainModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;
class MainController extends Controller
{
  

    
    public function login(Request $request)
    {
         $request->validate([
            'email' => 'required',
            'password' => 'required',
         ]);
        
         $user_role = User::where('email','=',$request->email)->first();
         
         //applicant
         
         if( $user_role && ($user_role->role == 'applicant'))
         {
            $user = MainModel::where('email','=',$user_role->email)->first();
           if(Hash::check($request->password,$user_role->password))
           {
            if(!$user_role->email_verified_at == null){
                $request->session()->put('loginID',$user_role->user_id); 
                $request->session()->put('applicantID',$user->id);
                return redirect('/applicant');
            }
            else
            {
                return back()->with('fail','Email Account is not verified!!');
            }

            }
        }
        
         //admin
         else if($user_role && ($user_role->role == 'admin')){
            if(Hash::check($request->password,$user_role->password)){
                if(!$user_role->email_verified_at == null){
                    $request->session()->put('loginID',$user_role->user_id); 
                
                    return redirect('/admin');
                }else{
                    return back()->with('fail','Email Account is not verified!!');
                }
         }
        }
         //invalid cridentials
         else
         {
            return back()->with('fail','This credentials is not registered'); 
         }
        
    }
    
    
    public function emailverification($token){
        $checktoken = User::where('emailVerify_token','=',$token)->first();
        if(isset($checktoken)){
            if(!$checktoken->email_verified_at){
                
                $checktoken->email_verified_at = Carbon::now();
                $checktoken->update();
                return redirect('login')->with('success','Successfully Verified!');
            }
           
        }else{
            return redirect('login')->with('fail','Email is already verified!');
        }
    }
    
    public function register(Request $request){
        $email = MainModel::where('email','=',$request->email)->first();
        $lastname = MainModel::where('lastname','=',$request->lastname)->first();
        $firstname = MainModel::where('firstname','=',$request->firstname)->first();
        $fullname = $request->firstname.' '.$request->middlename.' '.$request->lastname;
        $users_email = User::where('email','=',$request->email)->first();
        $name = User::where('name','=',$fullname)->first();
     
        if(($lastname && $firstname) && $email == false)
        {
           if($users_email){
            return back()->with('Email','Email is already used!');
           }
            return back()->with('Name','Your name is already registered!');
        }else if((($lastname && $firstname) == false) && $email){
            return back()->with('Email','Email is already used!');
        } 
        else if(($lastname && $firstname) && $email ){
            return back()->with('EmailAndName','Name and Email is already registered!');
        }else if($name){
            if($users_email){
                return back()->with('EmailAndName','Name and Email is already registered!');
            }
            return back()->with('Name','Name is already registered!');
        }
        else{
    
        $isEmpty = MainModel::count();
        $added_id = 0; 
        $gender = "null";
        $agreement = 1;
        if($isEmpty == 0){
            $added_id = 1;
            $latestID = 00001;
            $applicationID = '2022A'.'0000'.$latestID;
        }
        else{
            $latest = MainModel::all()->last()->id;
            $latestID = $latest + 00001;
            $added_id = $latest + 1;
            $applicationID = '2022A'.'0000'.$latestID;
            $agreement = 1;
            $gender = "null";
        }
      MainModel::create([
            'user_id' =>$applicationID,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename'=>$request->middlename,
            'email' =>$request->email,
            'phonenumber' =>$request->mobile,
            'gender' => $gender,
            'birthday' =>$request->dob,
            'age' => $request->agevalue,
            'birthplace' => $request->bplace,
            'address' => $request->address,
            'postalcode' =>$request->postal,
            'password' =>Hash::make($request->password),
            'agreement' => $agreement,
        ]);
        
        $create = User::create([
            'user_id'=>$applicationID,
            'name' =>$fullname,
            'email' =>$request->email,
            'emailVerify_token'=>Str::random(60),
            'password' =>Hash::make($request->password),
            'role' => 'applicant',
        ]);

        Mail::to($request->email)->send(new VerifyEmail($create));
        return redirect('login');
        }
    }
        
    public function logout(){
      
        if(Session::has('loginID')){
       
            Session::pull('loginID');
            return redirect('login');
        }
    }
}
