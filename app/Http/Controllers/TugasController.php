<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    //
    public function form()
    {
        return view('tugas.form');
    }
}
