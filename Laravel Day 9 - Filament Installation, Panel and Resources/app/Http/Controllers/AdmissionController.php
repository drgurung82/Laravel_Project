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
        $admissions = Admission::all();
        return view('admission.index', compact('admissions'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('admission.create', compact('courses'));
    }

    public function edit(int $id)
    {
        $admission = Admission::find($id);
        $courses = Course::all();
        return view('admission.edit', compact("admission", "courses"));
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            "name" => "required|min:3|max:40",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "course" => "required|exists:courses,id",
        ]);
        $admission = new Admission();
        $admission->name = $request->name;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->course_id = $request->course;
        $admission->save();
        SudamSweetAlert::toast("success", "Admission Submitted Successfully!");
        return redirect('/admission/index');
    }

    public function delete(int $id)
    {
        // return "delete" . $id;
        Admission::find($id)->delete();
        SudamSweetAlert::toast('success', 'Admission Deleted Successfully!');
        return redirect("/admission/index");
    }

    public function update(Request $request, int $id)
    {
        // return $request;
        $request->validate([
            "name" => "required|min:3|max:40",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "course" => "required|exists:courses,id",
        ]);
        $admission = Admission::find($id);
        $admission->name = $request->name;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->course_id = $request->course;
        $admission->save();
        SudamSweetAlert::toast("success", "Admission Updated Successfully!");
        return redirect('/admission/index');
    }
}
