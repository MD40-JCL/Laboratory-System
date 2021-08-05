<?php

namespace App\Http\Controllers;

use App\Method;
use Illuminate\Http\Request;

class MethodController extends Controller
{
    public function index()
    {
        return view('home/Method.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Method $method)
    {
        //
    }

    public function edit(Method $method)
    {
        //
    }

    public function update(Request $request, Method $method)
    {
        //
    }

    public function destroy(Method $method)
    {
        //
    }
}
