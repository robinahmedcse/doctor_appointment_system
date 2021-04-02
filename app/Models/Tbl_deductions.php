<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_deductions extends Model
{
    protected $primaryKey = 'deduction_id';


    protected $fillable = [
        'deductions_name','deductions_status',  
    ];



}
