<?php

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/services", function () {
    return view("services");
});

// Course Routes
Route::get("/courses", function () {
    $courses = Course::ALL();
    // return $courses;
    return view("course.index", compact('courses'));
});

Route::get("/course/create", function () {
    return view("course.create");
});

Route::post("/save-course", function (Request $request){
    // return $request;
    $course = new Course();
    $course->name = $request->course_name;
    $course->price = $request->price;
    $course->description = $request->description;
    $course->save();
    SudamSweetAlert::toast('success', 'Saved!');
    return redirect('/courses');
});

// Contact Routes
Route::get("/contact", function () {
    $contact = Contact::all();
    // return $contact;
    return view("contact.index", compact('contact'));
});

Route::get("/contact/create", function () {
    return view("contact.create");
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
    SudamSweetAlert::toast('success', 'Saved!');
    return redirect('/contact');
});
