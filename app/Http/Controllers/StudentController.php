<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {        
        $data = collect([
            (object) [
                'id' => 1,
                'name' => 'caca',
                'job' => 'student'
            ],
            (object) [
                'id' => 2,
                'name' => 'cici',
                'job' => 'student'
            ],
            (object) [
                'id' => 3,
                'name' => 'cucu',
                'job' => 'student'
            ],
            (object) [
                'id' => 1,
                'name' => 'baba',
                'job' => 'teacher'
            ],
            (object) [
                'id' => 2,
                'name' => 'bibi',
                'job' => 'teacher'
            ],
            (object) [
                'id' => 3,
                'name' => 'bubu',
                'job' => 'teacher'
            ]
        ]);

        $count = 0;
        
        return view('student.index', compact('data', 'count'));
    }

    public function show()
    {
        // return view('student-detail')
        //     ->with('selectedStudentId', $studentId);
    }
}
