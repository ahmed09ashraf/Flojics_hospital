<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all;

        return view('doctors.index', compact('doctors',));
    }
}
