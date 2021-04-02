<?php

namespace App\Http\Controllers\supper_admin\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Tbl_supper_admin;
use DB;


class dashboardController extends Controller
{

        public function index(){
          //  $data =['loggedUserInfo' => Tbl_supper_admin::where('s_admin_id', '=', session('admin_id'))->first() ];
            // echo'<pre>';
            // print_r( $data);
            // exit;


            $admin_id = session::get('admin_id');
            $data =DB::table('tbl_supper_admins')
                        ->where('s_admin_id', $admin_id)
                        ->first();
            // echo'<pre>';
            // print_r( $data);
            // exit;

            $homeContent =view('supper_admin.home.homeContent')
                                ->with('data',$data);
            return view('supper_admin.master')->with('mainContent',$homeContent);
        }





          public function supper_admin_logout(){
             Session::put('s_admin_id',NULL);
             Session::put('s_admin_username',NULL);
             Session::put('s_admin_role',NULL);

             return redirect('/login/admin/supper');
            
          }



    //
}
