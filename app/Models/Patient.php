<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
     protected $fillable = [
        'pat_fname', 
        'pat_mname', 
        'pat_lname',
        'pat_gender',
        'pat_address',
        'pat_birth',
        'pat_description'
    ];
    public $timestamps = false;
    protected $primaryKey = 'pat_id';
}
