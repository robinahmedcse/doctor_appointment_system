<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_title extends Model
{
    protected $primaryKey = 'company_titles_id';



    protected $fillable = [
        'company_titles','company_logo', 
    ];



}
