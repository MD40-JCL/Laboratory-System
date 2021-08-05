<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('home.Grade.index',compact('grades'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'gradeName'=>'required',
        ]);
        Grade::create($data);

        return redirect('grade')->with('Success',"Grade has been added");
    }

    public function show(Grade $grade)
    {
        //
    }

    public function edit(Grade $grade)
    {
        //
    }

    public function update(Request $request, Grade $grade)
    {
        //
    }

    public function destroy(Grade $grade)
    {
        //
    }
}
