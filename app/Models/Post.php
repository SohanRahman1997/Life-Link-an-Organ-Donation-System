<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'first_name', 
    'last_name',
    'email', 
    'contact_no', 
    'address1',
    'address2',
    'donor_id',
    'organ_id',
    'city',
    'area',
    'zip',
    'organ_type',
    'blood_type',
    'dob'];
}