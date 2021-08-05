<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("labstaff.employee_list.index");
    }

    public function create()
    {
        return view("labstaff.employee_list.create");
    }

    public function store(Request $request)
    {
        //
    }

    public function show(employee $employee)
    {
        //
    }

    public function edit(employee $employee)
    {
        //
    }

    public function update(Request $request, employee $employee)
    {
        //
    }

    public function destroy(employee $employee)
    {
        //
    }
}
