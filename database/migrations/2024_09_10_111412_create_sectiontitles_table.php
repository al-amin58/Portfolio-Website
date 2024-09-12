<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sectiontitles', function (Blueprint $table) {
            $table->id();
            $table->string('resume_title');
            $table->string('resume_description');
            $table->string('services_title');
            $table->string('services_description');
            $table->string('Skills_title');
            $table->string('skills_description');
            $table->string('projects_title');
            $table->string('projects_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sectiontitles');
    }
};
