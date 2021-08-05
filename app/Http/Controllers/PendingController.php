<?php

namespace App\Http\Controllers;

use App\Pending;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    public function index()
    {
        return view('product.pending.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pending $pending)
    {
        //
    }

    public function edit(Pending $pending)
    {
        //
    }

    public function update(Request $request, Pending $pending)
    {
        //
    }

    public function destroy(Pending $pending)
    {
        //
    }
}
