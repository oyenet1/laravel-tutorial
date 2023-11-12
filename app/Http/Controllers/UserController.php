<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function details()
    {
        $name = "Johnson Ade";
        $age = 45;
        $school = "Uniabuja";
        return view('details', compact(['name', 'age', 'school']));
    }
    public function welcome()
    {
        $name = "Johnson Ade";
        $age = 45;
        $school = "Uniabuja";
        return view('welcome', compact(['name', 'age', 'school']));
    }
}