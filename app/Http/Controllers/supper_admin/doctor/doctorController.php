<?php

namespace App\Http\Controllers\supper_admin\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facade,\Hash; 
use App\Models\doctor;
use Carbon\Carbon;

 



class doctorController extends Controller
{
    public function doctor_form_show(){
        $doctorContent =view('supper_admin.doctor.doctorContent');
        return view('supper_admin.master')->with('mainContent',$doctorContent);
    }


    public function doctor_info_store (Request $request){
   //  return $request ->all(); 
          $date = $request ->dob; 
          echo $date;
          echo"<br>";

          $d = date('y-m-d', strtotime($date));
           echo $d;
           echo"<br>";

          $dateformat = Carbon::parse($request->dob)->format('y-m-d');
          echo $dateformat;


     //     $date = str_replace('.', '-', $request->input('dob'));
          // create the mysql date format
         // $dateformat= Carbon::createFromFormat('d-m-Y H:i:s', $request ->dob);
    

      //    $date1 = str_replace('.', '-', $request->input('expiredUntil'));
          // create the mysql date format
      //    $dateformat1= Carbon::createFromFormat('d-m-Y H:i:s', $date1);

        // echo $d;

          //   $d = Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');

            // $d = Carbon::createFromFormat('d-m-y', $date)->format('y/m/d');
 
      exit();
 
        $request -> validate([
            'name' => ['required', 'string', 'max:100'],
            'dob' => ['required', 'string'],
            'gender' => ['required', 'string', 'max:10'],
           

            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'password' => ['required', 'string', 'min:4' ],


            'degree' => ['required', 'string', 'max:255'],
            'speciacity' => ['required', 'string', 'max:150'],
            'local_address' => ['required', 'string' ],
            'photo.*' => ['image|mimes:jpeg,png,jpg|max:2048'],
            'status' => ['required', 'string', 'min:06' ,'max:08'],
            
        ]);

 
 
            $email= $request->email;
            $set_email= $this->check_register_email($email);
         //   return  $email ;

            $photo=$request->file('photo');
            $set_photo_url= $this->doctor_image($photo);
   
           // return  $set_photo_url ;

      if($set_email == '1'){
             return back()->with('fail','This email allready registered');
      }else{
        $doctor= new doctor();
        $doctor->doctors_name = $request->name ;
        $doctor->doctors_dob = $dateformat ;
        $doctor->gender =$request->gender ;

        $doctor->doctors_phone =$request-> phone ;
        $doctor->doctors_email =$email ;
        $doctor->doctors_password = Hash::make ($request->password);
        
        $doctor->doctors_degree =$request-> degree ;
        $doctor->doctors_expert_in =$request->speciacity ;
        $doctor->doctors_local_address =$request->local_address ;
        

        $doctor->doctors_photo =$set_photo_url;
        $doctor->doctors_status =$request-> status ;
        $doctor->doctors_roll = 'doctor';

        $save =$doctor-> save(); 


        if($save){
            return redirect('supper/admin/master/doctor/manage')
                    ->with('success','Doctor information add succesfully'); 
        }else{
            return back()->with('fail','Try again later'); 
        }

    }



        // end of fuction doctor_info_store
    }



    protected function check_register_email($email){
        $check_email= doctor::where('doctors_email',$email)->first();

       if($check_email != null){
           $set_email = '1';  //found email
           return  $set_email;
       
       }else{
           $set_email = '0'; //not found email
           return  $set_email;
       }
    //check_register_email   
   }


   protected function doctor_image($photo) {

        $name = $photo->getClientOriginalName();
        $uploadPath = 'public/doctor_image/';

        $photo->move($uploadPath, $name);
        $imaeUrl = $uploadPath . $name;
       
        return  $imaeUrl;
   
}


    
 



    public function doctor_manage(){

return "manage_doctor";

    }














       // end of fuction    doctorController
}
