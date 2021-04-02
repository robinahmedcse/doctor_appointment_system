<?php

namespace App\Http\Controllers\supper_admin\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tbl_supper_admin;
use DB;


class profileController extends Controller
{

    public function index(){
        return 'sorry.  Eror 404,405,406'; 
    }

    public function profile_show(){
        $admin_id = session::get('admin_id');
        $data =DB::table('tbl_supper_admins')
                    ->where('s_admin_id', $admin_id)
                     ->select('s_admin_name','s_admin_username','s_admin_email', 's_admin_status')
                    ->first();
        // echo'<pre>';
        // print_r( $data);
        // exit;

        $profileContent =view('supper_admin.profile.profileContent')
                            ->with('data',$data);
        return view('supper_admin.master')->with('mainContent',$profileContent);
    }




    //end of profileController
}
