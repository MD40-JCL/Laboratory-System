<?php

namespace App\Http\Controllers;

use App\Specification;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    public function index()
    {
        return view('home/Specification.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Specification $specification)
    {
        //
    }

    public function edit(Specification $specification)
    {
        //
    }

    public function update(Request $request, Specification $specification)
    {
        //
    }

    public function destroy(Specification $specification)
    {
        //
    }
}
