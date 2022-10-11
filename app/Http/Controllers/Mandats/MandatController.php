<?php

namespace App\Http\Controllers\Mandats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MandatController extends Controller
{
    public function index(){
        return view('Pages.Mandat');
    }
}
