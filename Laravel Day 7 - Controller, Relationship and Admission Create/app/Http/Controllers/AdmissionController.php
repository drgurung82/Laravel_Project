<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

class AdmissionController extends Controller
{
    public function index()
    {
        // $admission = Admission::all();
        return view('admission.index');
    }

    public function create()
    {
        $courses = Course::all();
        return view('admission.create', compact('courses'));
    }

    public function edit(int $id)
    {
        return view('admission.edit');
    }

    public function store(Request $request)
    {
        // return $request;
        $admission = new Admission();
        $admission->name = $request->name;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->course_id = $request->course;
        $admission->save();
        SudamSweetAlert::toast("success", "Admission Submitted Successfully!");
        return redirect('/admission/index');
    }
}
