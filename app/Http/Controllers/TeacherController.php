<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {                
        $teachers = collect([
            (object) [
                'id' => 1,
                'name' => 'baba'
            ],
            (object) [
                'id' => 2,
                'name' => 'bibi'
            ],
            (object) [
                'id' => 3,
                'name' => 'bubu'
            ]
]); 

        $count = 0;
        
        return view('teacher.index', compact('teachers', 'count'));
    }

}
