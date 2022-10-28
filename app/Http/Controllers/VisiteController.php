<?php

namespace App\Http\Controllers;

use App\Models\Visite;
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    public function index()
    {
        $visites = Visite::orderBy('created_at')->paginate(10);
        return view('admin.visites.index',compact('visites'));
    }

    public function valider($token)
    {
        $visite = Visite::where('token',$token)->first();

        if(!$visite)
        {
            return back()->with('info','Visite introuvable');
        }

        $visite->update(['status'=> "Approuver"]);

        return back()->with('success','Viste approuvee');
    }


    public function refuser($token)
    {
        $visite = Visite::where('token',$token)->first();

        if(!$visite)
        {
            return back()->with('info','Visite introuvable');
        }

        $visite->update(['status'=> "Refuser"]);

        return back()->with('success','Viste refusee');
    }
}
