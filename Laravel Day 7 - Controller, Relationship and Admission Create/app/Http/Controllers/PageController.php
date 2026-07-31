<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

// Function to open welcome page
{
    public function welcome() {
    return view("welcome");
}

// Function to open about page
public function about() {
    return view("about");
}

// Function to open services page
public function services() {
    return view("services");
}
}
