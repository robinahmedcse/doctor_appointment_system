<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_emp_designation extends Model
{
    protected $primaryKey = 'emp_designation_id';



    protected $fillable = [
        'emp_designation_name','emp_designation_status',  
    ];

}
