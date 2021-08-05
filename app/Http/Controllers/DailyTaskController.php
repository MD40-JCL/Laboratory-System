<?php

namespace App\Http\Controllers;

use App\DailyTask;
use Illuminate\Http\Request;

class DailyTaskController extends Controller
{
    public function index()
    {
        return view('home.DailyTask.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(DailyTask $dailyTask)
    {
        //
    }

    public function edit(DailyTask $dailyTask)
    {
        //
    }

    public function update(Request $request, DailyTask $dailyTask)
    {
        //
    }

    public function destroy(DailyTask $dailyTask)
    {
        //
    }
}
