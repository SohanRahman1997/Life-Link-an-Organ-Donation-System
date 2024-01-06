<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['image','first_name', 'last_name','email', 'contact_no', 'address1','address2',
    'city','area','zip','dob'];
}