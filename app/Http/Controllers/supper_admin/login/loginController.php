<?php

namespace App\Http\Controllers\supper_admin\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facade,\Hash; 
use Illuminate\Support\Facades\Session;
use DB;
use App\Models\Tbl_supper_admin;




class loginController extends Controller
{
 

    public function registration_form (){

        return view('supper_admin.login.regContent'); 
    }



    public function check_registration(Request $request){
    // return    $request->all();
                $request->validate([
                    'name' => 'required|min:4',
                    'username' => 'required|alpha|min:5',
                    'email' => 'required|email',
                    'password' => 'required| min:6|',
                    'confirm_password' => 'required| min:6|',
                ]);

                $email= $request->email;
                $set_email= $this->check_register_email($email);


                if($set_email == '1'){
                    return back()->with('fail','This email allready registered');
                }else{

                    $password =  $request->password;
                    $c_password=  $request->confirm_password;
                    $set_email= $this->check_register_email($password, $c_password);
    
                    if($password != $c_password){
                        return back()->with('fail','Password Not Match');
                    }
                    else{
                        $admin= new Tbl_supper_admin();
                        $admin->s_admin_name = $request->name ;
                        $admin->s_admin_username = $request->username ;
                        $admin->s_admin_email = $email ;
                        $admin->s_admin_password = Hash::make ($request->password);
                        $admin->s_admin_role =  '1';
                        $admin->s_admin_status =  '1';
                        $save =$admin-> save(); 
         
                  
                        if($save){
                            return back()->with('success','Add succesfully.Please Login'); 
                        }else{
                            return back()->with('fail','Try again later'); 
                        }
    
    
                    }
                }





               

 
          

    //check_registration
    }



    protected function check_register_email($email){
         $check_email= Tbl_supper_admin::where('s_admin_email',$email)->first();

        if($check_email != null){
            $set_email = '1';  //found email
            return  $set_email;
        
        }else{
            $set_email = '0'; //not found email
            return  $set_email;
        }
     //check_register_email   
    }

    

  



    



    public function login_form(){
        return view('supper_admin.login.login'); 
    }
 
 
    public function check_login(Request $request){

     
        $request->validate([
            'email' => 'required|email',
            'password' => 'required| min:6|',
        ]);

        $email= $request->email;
        $password =  $request->password;

        // echo  $password;
        // exit();

        $supper_admin_info = Tbl_supper_admin::where('s_admin_email',$email)->first();
          print_r($supper_admin_info );   
         //exit();
        if(!$supper_admin_info){
            return back()->with('fail','Incorrect email and password'); 
        }else{
            if(Hash::check($password,$supper_admin_info->s_admin_password )){
               
                $supper_admin_status = $supper_admin_info->s_admin_status;
               
                if($supper_admin_status == '1'){
                    Session::put('s_admin_id', $supper_admin_info->s_admin_id);
                    Session::put('S_admin_username', $supper_admin_info->s_admin_username);
                    Session::put('s_admin_role', $supper_admin_info->s_admin_role);
                    return redirect('/supper/admin/master/dashboard');

                }else{
                    return back()->with('fail','Invalid User'); 
                }

            }else{
                return back()->with('fail','Incorrect Email and Password'); 
            }

        }
  





        //check_login
    }
 
 
    //loginController
}
