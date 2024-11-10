<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        return inertia(
            'Income/Income',
            [
                'message' => 'Hello from Laravel!'
            ]
        );
    }

    public function show()
    {
        return inertia('Income/Show');
    }
}