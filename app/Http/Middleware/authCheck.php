<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class authCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        $admin_id =  Session::get('s_admin_id');
        $admin_role =  Session::get('s_admin_role');
	    	$path = $request->path();

        //    echo $path;
        //    echo $admin_role;
        //    echo $admin_id;
     //  exit();
 



        if( ($admin_id == NULL) && ($admin_role  != 'doctor') && ($request->path() == 'supper/admin/master/dashboard') ){
       
 
                return redirect('/login/admin/supper') ;
        } 


        if(($admin_role == 'doctor') && ($admin_id != NULL) && (($path == 'login/admin/supper') || ($path == 'registration/admin/supper')) ){
 
             return redirect('supper/admin/master/dashboard') ; 
        } 
	
     //   return $next($request);
  

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00: GMT');
    
    
  }
}
