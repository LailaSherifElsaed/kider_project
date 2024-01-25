<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;


Route::prefix('admin')->group(function () {
    //FirstPage
    Route::get('home_page',[ExampleController::class,'admin_homePage'])->name('home_page');
    //Testimonials
    Route::get('insert_testimonial',[TestimonialController::class,'create'])->name('insert_testimonial');
    Route::post('store_testimonial',[TestimonialController::class,'store'])->name('store_testimonial');
    Route ::get('testimonials',[TestimonialController::class,'index'])->name('testimonials');


    Route ::get('updateTestimonial/{id}',[TestimonialController::class,'edit']);
    Route ::put('update/{id}',[TestimonialController::class,'update'])->name('update');
    Route::get("showTestimonial/{id}", [TestimonialController::class,"show"])->name('showTestimonial');
    Route ::get('deleteTestimonial/{id}',[TestimonialController::class,'destroy'])->name('deleteTestimonial');
    Route ::get('trashedTestimonial',[TestimonialController::class,'trashed'])->name('trashedTestimonial');
    Route ::get('forceDelete/{id}',[TestimonialController::class,'forceDelete'])->name('forceDelete');
    Route ::get('restoreTestimonial/{id}',[TestimonialController::class,'restore_testimonial'])->name('restoreTestimonial');

    //Contact Us
    Route::post('sendContactUs',[ExampleController::class,'send_contactUs'])->name('sendContactUs');
    //Display contacts list
    Route::get('contacts_list',[ExampleController::class,'index'])->name('contacts_list');
    Route::get("showcontacts/{id}", [ExampleController::class,"show_contact"])->name('showcontacts');
    //Appointment
    Route::get('create_appointment',[ExampleController::class,'create'])->name('create_appointment');
    Route::post('store_appointment',[ExampleController::class,'store'])->name('store_appointment');
    Route::get('Appointment',[ExampleController::class,'appointment_list'])->name('Appointment');
    Route::get('show_app/{id}', [ExampleController::class, 'showAppointment'])->name('show_app');
    //Teacher
    Route::get('addTeacher',[TeacherController::class,'create'])->name('addTeacher');
    Route::post('store_teacher',[TeacherController::class,'store'])->name('store_teacher');
    Route::get('teachers',[TeacherController::class,'index'])->name('teachers');
    Route::get('editTeacher/{id}',[TeacherController::class,'edit']);
    Route::put('update_Teacher/{id}',[TeacherController::class,'update'])->name('update_Teacher');
    Route ::get('deleteTeacher/{id}',[TeacherController::class,'destroy'])->name('deleteTeacher');
    Route ::get('trashedTeacher',[TeacherController::class,'trashed'])->name('trashedTeacher');
    Route ::get('forceDeleteTeacher/{id}',[TeacherController::class,'forceDelete'])->name('forceDeleteTeacher');
    Route ::get('restoreTeacher/{id}',[TeacherController::class,'restore_teacher'])->name('restoreTeacher');
    //Class
    Route::get('add_class',[ClassController::class,'create'])->name('add_class');
    Route::post('store_class',[ClassController::class,'store'])->name('store_class');
    Route::get('classesList',[ClassController::class,'index'])->name('classesList');
    Route::get('editClass/{id}',[ClassController::class,'edit']);
    Route::put('update_class/{id}',[ClassController::class,'update'])->name('update_class');
    Route ::get('deleteClass/{id}',[ClassController::class,'destroy'])->name('deleteClass');
    Route ::get('trashedClass',[ClassController::class,'trashed'])->name('trashedClass');
    Route ::get('forceDeleteClass/{id}',[ClassController::class,'forceDelete'])->name('forceDeleteClass');
    Route ::get('restoreClass/{id}',[ClassController::class,'restore_class'])->name('restoreClass');





});
Auth::routes(['verify'=>true]);
