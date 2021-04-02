<?php

namespace App\Http\Controllers\supper_admin\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbl_supper_admin;
use DB;

class changePasswordController extends Controller
{
    public function index(){
        return 'sorry.  Eror 404,405,406'; 
    }


    public function password_form_show(){
        
        $profileContent =view('supper_admin.password.passwordContent');
        return view('supper_admin.master')->with('mainContent',$profileContent);
    }





    //changePasswordController
}
