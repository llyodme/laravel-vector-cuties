<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'inv_itemname', 
        'inv_date',
        'inv_quantity',
        'inv_exp_date',
        'inv_description'
    ];

    public $timestamps = false;
    protected $primaryKey = 'inv_id';
}
