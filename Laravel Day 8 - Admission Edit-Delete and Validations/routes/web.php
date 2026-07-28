<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Models\Admission;
use App\Models\Contact;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

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
Route::delete("/admission/delete/{id}", [AdmissionController::class, "delete"]);
Route::patch("/admission/update/{id}", [AdmissionController::class, "update"]);


// Contact Routes
Route::get("/contact", [ContactController::class, "index"]);
Route::get("/contact/create", [ContactController::class, "create"]);
Route::post("/save-contact", [ContactController::class, "store"]);
Route::delete('/contact/delete/{id}', [ContactController::class, "delete"]);
Route::get('/contact/edit/{id}', [ContactController::class, "edit"]);
Route::patch("/contact/update/{id}", [ContactController::class, "update"]);



