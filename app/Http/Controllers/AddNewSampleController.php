<?php

namespace App\Http\Controllers;

use App\AddNewSample;
use Illuminate\Http\Request;

class AddNewSampleController extends Controller
{
    public function index()
    {
        return view('sample.addNewSample.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(AddNewSample $addNewSample)
    {
        //
    }

    public function edit(AddNewSample $addNewSample)
    {
        //
    }

    public function update(Request $request, AddNewSample $addNewSample)
    {
        //
    }

    public function destroy(AddNewSample $addNewSample)
    {
        //
    }
}
