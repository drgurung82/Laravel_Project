<?php

use App\Models\Admission;
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
    SudamSweetAlert::toast('success', 'Course Created Successfully!');
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
    SudamSweetAlert::toast('success', 'Course Created Successfully!');
    return redirect('/contact');
});

Route::delete('/course/delete/{id}', function ($id) {
    // return "delete" . $id;
    Course::find($id)->delete();
    SudamSweetAlert::toast('success', 'Course Deleted Successfully!');
    return redirect("/courses");
});

Route::get('/course/edit/{id}', function ($id) {
    // return "delete" . $id;
    $course = Course::find($id);
    return view("course.edit", compact('course'));
});

Route::patch("/course/update/{id}", function (Request $request, $id){
    // return $request;
    // $course = new Course();
    $course = Course::find($id);
    $course->name = $request->course_name;
    $course->price = $request->price;
    $course->description = $request->description;
    $course->save();
    SudamSweetAlert::toast('success', 'Course Updated Successfully!');
    return redirect('/courses');
});

// Admission
Route::get("/admission/index", function(){
    $admission = Admission::all();
    return view('admission.index');
});

Route::get("/admission/create", function(){
    return view('admission.create');
});

Route::get("/admission/edit/{id}", function($id){
    return view('admission.edit');
});
