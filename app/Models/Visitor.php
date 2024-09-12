<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address'];

    // Optional: if you want to explicitly specify the table name
    protected $table = 'visitors';
}
