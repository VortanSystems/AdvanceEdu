<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', [
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        return view('cars.create');
    }
}
