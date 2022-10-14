<?php

namespace App\Http\Controllers\Mandats;

use Carbon\Carbon;
use App\Models\Mandat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MandatController extends Controller
{


    public function affiche_form_mandat()
    {
        $dernier_ligne = Mandat::orderBy('created_at', 'DESC')->first();
        $today = Carbon::now();
        $today_year = $today->year;
        $sub_annee = substr(strval($today_year), 2);

        if ($dernier_ligne != null) {
            if ($today_year > $dernier_ligne->created_at->year) {

                $num_sequenciel = "000";
            } else {

                $num_sequenciel = str_pad($dernier_ligne->id, 3, "0", STR_PAD_LEFT);
            }
        } else {
            $num_sequenciel = "000";
        }
        $num_mandat = $sub_annee . "-" . $num_sequenciel;
        dump($num_mandat);
    }



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
