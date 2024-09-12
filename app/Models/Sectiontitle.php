<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectiontitle extends Model
{
    use HasFactory;

    protected $fillable=['resume_title', 'resume_description', 'services_title', 'services_description', 'Skills_title', 'skills_description', 'projects_title', 'projects_description'];
}
