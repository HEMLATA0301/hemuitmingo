<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    //     'name',
    //     'image',
    //     'social_media_status',
    //     'position',
    // ];
}

