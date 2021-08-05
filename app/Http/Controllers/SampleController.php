<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        return view('Sample.sampleList.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Sample $sample)
    {
        //
    }

    public function edit(Sample $sample)
    {
        //
    }

    public function update(Request $request, Sample $sample)
    {
        //
    }

    public function destroy(Sample $sample)
    {
        //
    }
}
