<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class deductionAuthsupperAdmin
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

        $admin_id =  Session::get('admin_id');
        $admin_role =  Session::get('admin_role');
        $path = $request->path();

  //      echo   $admin_id ;
   //     echo $path;
     //   exit();

     if( $admin_id == NULL  && $admin_role== NULL){
            
        // echo $path;
        //exit();   
        return redirect('/login/admin/supper') ;
    } 
 

     if( ($admin_id == NULL) && ($request->path() == 'supper/admin/master/deduction/manage') ){
       
        // echo $path;
          //exit();   
          return redirect('/login/admin/supper') ;
    } 
 
  if(($admin_id == '1') && (($path == 'login/admin/supper') || ($path == 'registration/admin/supper')) ){
       //  echo $path;
        //  exit();  
       return redirect('supper/admin/master/dashboard') ; 
  } 



  return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                        ->header('Pragma','no-cache')
                        ->header('Expires','Sat 01 Jan 1990 00:00: GMT');

 
    }
}
