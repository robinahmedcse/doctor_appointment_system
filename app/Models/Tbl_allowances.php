<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_allowances extends Model
{
    protected $primaryKey = 'allowances_id';



    protected $fillable = [
        'allowances_name','allowances_status',  
    ];



}
