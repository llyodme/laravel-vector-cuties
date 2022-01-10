<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
     protected $fillable = [
        'app_name', 
        'app_date', 
        'app_address',
        'app_contact',
        'app_email',
        'app_status',
        'app_services'
    ];
    public $timestamps = false;
    protected $primaryKey = 'app_id';
}
