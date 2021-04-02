<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_emp_department extends Model
{

    
    protected $primaryKey = 'emp_department_id';



    protected $fillable = [
        'emp_department_name','emp_department_code', 'emp_department_status',  
    ];


   

    //
}
