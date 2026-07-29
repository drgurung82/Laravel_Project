<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::ALL();
        // return $courses;
        return view("course.index", compact('courses'));
    }

    public function create()
    {
        return view("course.create");
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            "course_name" => "required|min:3|max:40",
            "price" => "required|numeric|min:0",
            "description" => "required|min:3|max:1000",
        ]);
        $course = new Course();
        $course->name = $request->course_name;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->save();
        SudamSweetAlert::toast('success', 'Course Created Successfully!');
        return redirect('/courses');
    }

    public function delete(int $id)
    {
        // return "delete" . $id;
        Course::find($id)->delete();
        SudamSweetAlert::toast('success', 'Course Deleted Successfully!');
        return redirect("/courses");
    }

    public function edit(int $id)
    {
        // return "delete" . $id;
        $course = Course::find($id);
        return view("course.edit", compact('course'));
    }

    public function update(Request $request, int $id)
    {
        // return $request;
        // $course = new Course();
        $request->validate([
            "course_name" => "required|min:3|max:40",
            "price" => "required|numeric|min:0",
            "description" => "required|min:3|max:1000",
        ]);
        $course = Course::find($id);
        $course->name = $request->course_name;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->save();
        SudamSweetAlert::toast('success', 'Course Updated Successfully!');
        return redirect('/courses');
    }
}
