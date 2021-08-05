<?php

namespace App\Http\Controllers;

use App\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function index()
    {
        return view('home/Parameter.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Parameter $parameter)
    {
        //
    }

    public function edit(Parameter $parameter)
    {
        //
    }

    public function update(Request $request, Parameter $parameter)
    {
        //
    }

    public function destroy(Parameter $parameter)
    {
        //
    }
}
