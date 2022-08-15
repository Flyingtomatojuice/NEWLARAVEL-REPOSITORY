<?php

namespace App\Imports;

use App\Mail\AdminMail;
use App\Models\User;
use App\Models\MainModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail;
class ImportList implements ToModel,WithHeadingRow,WithValidation,SkipsOnError,SkipsOnFailure
{
    use Importable,SkipsErrors,SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       // $user_role = User::where('user_id','=',$request->user_id)->first();
      
       $isEmpty = MainModel::count();
       $fullname = $row['firstname'].' '. $row['middlename'].' '. $row['lastname'];
       $agrement = 1;
       if($isEmpty == 0){

            $latestID = 1;
            $applicationID = '2022A'.'0000'.$latestID;
        }
        else{
            $latest = MainModel::all()->last()->id;
            $latestID = $latest + 1;
            $applicationID = '2022A'.'0000'.$latestID;
        }
        $user_acc = User::create([
            'user_id'=>$applicationID,
            'name' =>$fullname,
            'email' => $row['email'],
            'emailVerify_token'=>Str::random(60),
            'password' => Hash::make($row['lastname']),
            'role' => 'applicant',
        ]);
        Mail::to($row['email'])->send(new AdminMail($user_acc));
        
        return new MainModel([
            'user_id'=>$applicationID,
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'middlename' => $row['middlename'],
            'gender' => $row['gender'],
            'birthday' => $row['birthday'],
            'age' =>$row['age'],
            'birthplace' => $row['birthplace'],
            'email' => $row['email'],
            'phonenumber' => $row['phonenumber'],
            'address' => $row['address'],
            'password' => Hash::make($row['lastname']),
            'agreement' =>$agrement,
         ]);
        
    }
    public function rules(): array
    {
      
        
        return [
         
           '*.email' => ['email', 'unique:applicants,email'],
            
            
        ];
    }
    public function onFailure(Failure ...$failure)
    {
        
    }
}
