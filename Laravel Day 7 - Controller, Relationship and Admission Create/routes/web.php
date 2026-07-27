<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Models\Admission;
use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

// Page Routes
Route::get("/", [PageController::class, "welcome"]);
Route::get("/about", [PageController::class, "about"]);
Route::get("/services", [PageController::class, "services"]);

// Course Routes
Route::get("/courses", [CourseController::class, "index"]);
Route::get("/course/create", [CourseController::class, "create"]);
Route::post("/save-course", [CourseController::class, "store"]);
Route::delete('/course/delete/{id}', [CourseController::class, "delete"]);
Route::get('/course/edit/{id}', [CourseController::class, "edit"]);
Route::patch("/course/update/{id}", [CourseController::class, "update"]);


// Admission Routes
Route::get("/admission/index", [AdmissionController::class, "index"]);
Route::get("/admission/create", [AdmissionController::class, "create"]);
Route::get("/admission/edit/{id}", [AdmissionController::class, "edit"]);
Route::post("/admission/store", [AdmissionController::class, "store"]);



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



