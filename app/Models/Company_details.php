<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_details extends Model
{

    
    protected $primaryKey = 'company_details_id';



    protected $fillable = [
        'phone_number_1','phone_number_2', 'email',  'website_url','fax','company_address','city', 'state','postal_code','country',
    ];





    //
}
