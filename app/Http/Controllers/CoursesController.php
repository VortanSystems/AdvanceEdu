<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class CoursesController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth'); 
    }

    public function index()
    {
        $courses = Course::all();

        return view('courses.index', [
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store()
    {
        $data = request()->validate([
           'title' => 'required',
           'description' => 'required',
           'content' => 'required',
           'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('course', 'public');


        auth()->user()->courses()->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'image' => $imagePath,
        ]);
        
       return redirect('/courses');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
}
