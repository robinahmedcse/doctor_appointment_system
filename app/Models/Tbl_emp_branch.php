<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_emp_branch extends Model
{


    protected $primaryKey = 'emp_branch_id';



    protected $fillable = [
        'emp_branch_name','emp_branch_code', 'emp_branch_status',  
    ];


   


    //
}
