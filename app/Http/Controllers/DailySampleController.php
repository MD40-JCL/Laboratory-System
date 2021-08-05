<?php

namespace App\Http\Controllers;

use App\DailySample;
use Illuminate\Http\Request;

class DailySampleController extends Controller
{
    public function index()
    {
        return view("sample.dailySample.index");
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(DailySample $dailySample)
    {
        //
    }

    public function edit(DailySample $dailySample)
    {
        //
    }

    public function update(Request $request, DailySample $dailySample)
    {
        //
    }

    public function destroy(DailySample $dailySample)
    {
        //
    }
}
