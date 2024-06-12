<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealData extends Model
{
    protected $table = 'realdata';
    protected $primaryKey = 'property_id';
    protected $fillable = ['name', 'description', 'property_id', 'views'];

}
