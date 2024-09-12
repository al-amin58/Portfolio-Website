<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conract extends Model
{
    use HasFactory;
    protected $fillable=['title', 'description', 'address', 'number', 'email', 'website', 'image'];
}
