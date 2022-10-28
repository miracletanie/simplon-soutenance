<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Visite;
use App\Models\Article;
use App\Models\Message;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    public function accueil()
    {
        return view('site.pages.accueil');
    }


    public function about()
    {
        return view('site.pages.about');
    }

    public function blog()
    {
        // $articles = Article::where('status','publish')->get();
        $articles = Article::orderBy('created_at','desc')->get();
        return view('site.pages.blog',compact('articles'));
    }

    public function detail_article($token)
    {
        $article = Article::where('token',$token)->first();

        if(!$article)
        {
            return back();
        }

        return view('site.pages.blog-details',compact('article'));
    }

    public function contact()
    {
        return view('site.pages.contact');
    }

    public function bien()
    {
        $libelle = "Tous les biens";
        $biens = Bien::orderBy('created_at')->get();
        $all_types = false;

        return view('site.pages.properties',compact('libelle','biens','all_types'));
    }

    public function detail_bien($token)
    {
        $bien = Bien::where('token',$token)->first();

        if(!$bien)
        {
            return back()->with('info','Bien introuvable');
        }

        return view('site.pages.property',compact('bien'));
    }

    public function rdv(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contact' => 'required',
            'date' => 'required',
            'message' => 'required',
            'bien'=> 'required',
          ]);

          if ($validator->fails()) {
            if (request()->is('api/*')) {
              return $this->sendError('Validation Error.', $validator->errors());
            } else {
              return back()->withErrors($validator->errors());
            }
          }

          Visite::create([
            'name'=> $request->name,
            'phone'=> $request->contact,
            'date'=> $request->date,
            'message'=>$request->message,
            'bien_id' => Bien::where('token',$request->bien)->first()->id
          ]);

          return back()->with('success','Rendez-vous pris en compte avec succès');
    }

    public function bien_par_type($token)
    {
        $type = TypeBien::where('token',$token)->first();

        if(!$type)
        {
            return back();
        }

        $libelle = $type->name;
        $biens = Bien::where('type_bien_id',$type->id)->get();
        $all_types = false;

        return view('site.pages.properties',compact('libelle','biens','all_types'));
    }

    public function login()
    {
        if(request()->user())
        {
            return redirect()->route('dashboard');
        }
        return view('auth.connexion');
    }

    public function laisser_message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'message' => 'required',
            'email' => 'required',
          ]);

          if ($validator->fails()) {
              return back()->withErrors($validator->errors());
          }

          Message::create([
              'name'=>$request->name,
              'email'=>$request->email,
              'subject'=>$request->subject,
              'content'=>$request->message,
          ]);

          return back()->with('success','Message avec succès');
    }
}
