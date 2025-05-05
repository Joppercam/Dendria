<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servicios', [HomeController::class, 'services'])->name('services');
Route::get('/tecnologias', [HomeController::class, 'technologies'])->name('technologies');
Route::get('/proyectos', [HomeController::class, 'projects'])->name('projects');
Route::get('/equipo', [HomeController::class, 'team'])->name('team');
Route::get('/sobre-nosotros', [HomeController::class, 'about'])->name('about');
Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');
Route::get('/testimonios', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/terminos-y-condiciones', [HomeController::class, 'terms'])->name('terms');
Route::get('/politica-de-privacidad', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/politica-de-cookies', [HomeController::class, 'cookies'])->name('cookies');

// Handle contact form submission
Route::post('/contacto', [HomeController::class, 'submitContactForm'])->name('contact.submit');

// In routes/web.php
Route::get('/proyectos/{project}', [HomeController::class, 'showProject'])->name('projects.show');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{post}', [HomeController::class, 'showPost'])->name('blog.show');



// Admin routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    // Contacts
    Route::get('/contacts', [App\Http\Controllers\Admin\DashboardController::class, 'contacts'])->name('contacts');
    
    // Projects
    Route::get('/projects', [App\Http\Controllers\Admin\DashboardController::class, 'projects'])->name('projects');
    Route::get('/projects/create', [App\Http\Controllers\Admin\DashboardController::class, 'createProject'])->name('projects.create');
    Route::post('/projects', [App\Http\Controllers\Admin\DashboardController::class, 'storeProject'])->name('projects.store');
    Route::get('/projects/{project}/edit', [App\Http\Controllers\Admin\DashboardController::class, 'editProject'])->name('projects.edit');
    Route::put('/projects/{project}', [App\Http\Controllers\Admin\DashboardController::class, 'updateProject'])->name('projects.update');
    Route::delete('/projects/{project}', [App\Http\Controllers\Admin\DashboardController::class, 'destroyProject'])->name('projects.destroy');
    
    // Testimonials
    Route::get('/testimonials', [App\Http\Controllers\Admin\DashboardController::class, 'testimonials'])->name('testimonials');
    Route::get('/testimonials/create', [App\Http\Controllers\Admin\DashboardController::class, 'createTestimonial'])->name('testimonials.create');
    Route::post('/testimonials', [App\Http\Controllers\Admin\DashboardController::class, 'storeTestimonial'])->name('testimonials.store');
    Route::get('/testimonials/{testimonial}/edit', [App\Http\Controllers\Admin\DashboardController::class, 'editTestimonial'])->name('testimonials.edit');
    Route::put('/testimonials/{testimonial}', [App\Http\Controllers\Admin\DashboardController::class, 'updateTestimonial'])->name('testimonials.update');
    Route::delete('/testimonials/{testimonial}', [App\Http\Controllers\Admin\DashboardController::class, 'destroyTestimonial'])->name('testimonials.destroy');
    
    // Team Members
    Route::get('/team', [App\Http\Controllers\Admin\DashboardController::class, 'team'])->name('team');
    Route::get('/team/create', [App\Http\Controllers\Admin\DashboardController::class, 'createTeamMember'])->name('team.create');
    Route::post('/team', [App\Http\Controllers\Admin\DashboardController::class, 'storeTeamMember'])->name('team.store');
    Route::get('/team/{teamMember}/edit', [App\Http\Controllers\Admin\DashboardController::class, 'editTeamMember'])->name('team.edit');
    Route::put('/team/{teamMember}', [App\Http\Controllers\Admin\DashboardController::class, 'updateTeamMember'])->name('team.update');
    Route::delete('/team/{teamMember}', [App\Http\Controllers\Admin\DashboardController::class, 'destroyTeamMember'])->name('team.destroy');

    // Blog Posts
    Route::get('/blog', [App\Http\Controllers\Admin\DashboardController::class, 'blog'])->name('blog');
    Route::get('/blog/create', [App\Http\Controllers\Admin\DashboardController::class, 'createBlogPost'])->name('blog.create');
    Route::post('/blog', [App\Http\Controllers\Admin\DashboardController::class, 'storeBlogPost'])->name('blog.store');
    Route::get('/blog/{blogPost}/edit', [App\Http\Controllers\Admin\DashboardController::class, 'editBlogPost'])->name('blog.edit');
    Route::put('/blog/{blogPost}', [App\Http\Controllers\Admin\DashboardController::class, 'updateBlogPost'])->name('blog.update');
    Route::delete('/blog/{blogPost}', [App\Http\Controllers\Admin\DashboardController::class, 'destroyBlogPost'])->name('blog.destroy');

});

