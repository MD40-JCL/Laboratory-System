<?php

namespace App\Http\Controllers;

use App\Kiln;
use Illuminate\Http\Request;

class KilnController extends Controller
{
    public function index()
    {
        return view('product.kiln.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Kiln $kiln)
    {
        //
    }

    public function edit(Kiln $kiln)
    {
        //
    }

    public function update(Request $request, Kiln $kiln)
    {
        //
    }

    public function destroy(Kiln $kiln)
    {
        //
    }
}
