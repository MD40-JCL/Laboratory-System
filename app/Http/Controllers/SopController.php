<?php

namespace App\Http\Controllers;

use App\Sop;
use Illuminate\Http\Request;

class SopController extends Controller
{
    public function index()
    {
        return view('home/Sop.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Sop $sop)
    {
        //
    }

    public function edit(Sop $sop)
    {
        //
    }

    public function update(Request $request, Sop $sop)
    {
        //
    }

    public function destroy(Sop $sop)
    {
        //
    }
}
