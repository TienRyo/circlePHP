<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request) {
        $courses = Courses::all();
        return $request->json($courses);
    }
    public function create(Request $request) {

        $courses = new Courses;
        $courses->title = $request->title;
        $courses->description = $request->description;

        $courses->save();

    }
}
