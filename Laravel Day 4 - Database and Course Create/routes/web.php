<?php

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post("/save-course", function (Request $request){
    // return $request;
    $course = new Course();
    $course->name = $request->course_name;
    $course->price = $request->price;
    $course->description = $request->description;
    $course->save();
    return redirect('/courses');
});

Route::post("/save-contact", function (Request $request){
    // return $request;
    $contact = new Contact();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->save();
    return redirect('/contact');
});
