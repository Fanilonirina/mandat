<?php

namespace App\Http\Controllers\Mandats;

use App\Http\Controllers\Controller;
use App\Models\Mandat;
use Illuminate\Http\Request;

class MandatController extends Controller
{
    public function index()
    {
        $mandats = Mandat::all();
        return view('Pages.Mandat')->with('mandats', $mandats);
    }

    public function get_mandat($id)
    {
        $mandat = Mandat::find($id);
        return view('Pages.detail_mandat')->with('mandat', $mandat);
    }
}
