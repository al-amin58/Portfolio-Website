<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConractController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SectiontitleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');

Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    //---------admin profile setting----------
    Route::get('/admin/dashboard/profile', function () {return view('dashboard');})->name('dashboard');
    //---------logout----------
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    //---------Hero section----------
    Route::get('/hero', [HeroController::class, 'index'])->name('hero.index');
    Route::post('/hero', [HeroController::class, 'update'])->name('hero.update');
    //-------------about------------
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::put('/about', [AboutController::class, 'update'])->name('about.update');
    Route::get('/about/download-cv', [AboutController::class, 'downloadCv'])->name('about.downloadCv');
    //-----------Resume--------
   Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
   Route::get('/resume/create', [ResumeController::class, 'create'])->name('resume.create');
   Route::post('/resume/store', [ResumeController::class, 'store'])->name('resume.store');
   Route::get('/resume/edit/{id}', [ResumeController::class, 'edit'])->name('resume.edit');
   Route::put('/resume/update/{id}', [ResumeController::class, 'update'])->name('resume.update');
   Route::delete('resume/delete/{id}', [ResumeController::class, 'destroy'])->name('resume.destroy');
   //----------Section title---------
   Route::get('/section', [SectiontitleController::class, 'index'])->name('section.title');
   Route::post('/section', [SectiontitleController::class, 'update'])->name('section.update');
   //-------services--------
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    //-------Skills----------
    Route::get('/skill', [SkillController::class, 'index'])->name('skill.index');
    Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('/skill/store', [SkillController::class, 'store'])->name('skill.store');
    Route::get('skill/edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::put('skill/update/{id}', [SkillController::class, 'update'])->name('skill.update');
    Route::delete('skill/delete/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');
    //-------Projects----------
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('project/delete/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    //------------Hire section--------------
    Route::get('/hire', [HireController::class, 'index'])->name('hire.index');
    Route::post('/hire', [HireController::class, 'update'])->name('hire.update');
    //------------contact section--------------
    Route::get('/contact', [ConractController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ConractController::class, 'update'])->name('contact.update');
    //------------Footer section--------------
    Route::get('/footer', [FooterController::class, 'index'])->name('footer.index');
    Route::post('/footer', [FooterController::class, 'update'])->name('footer.update');
    //------------Footer section--------------
    Route::get('/message', [MessageController::class, 'index'])->name('message.index');
    Route::get('/messages/{id}', [MessageController::class, 'show']);
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');


});
