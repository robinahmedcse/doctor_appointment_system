<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doctors_name', 'doctors_dob', 'gender', 'doctors_phone', 'doctors_email', 'doctors_password', 'doctors_degree', 
        'doctors_expert_in','doctors_local_address','doctors_status','doctors_photo', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'doctors_password', 'remember_token',
    ];

 
}
