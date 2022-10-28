<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','asc')->paginate(10);
        $count_articles = Article::count();

        return view('admin.articles.index',compact('articles','count_articles'));

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = TypeArticle::orderBy('name')->get();
        return view('admin.articles.create',compact('types'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'content' => 'required',
            'type' => 'required',
            'image'=> 'required',
          ]);

          if ($validator->fails()) {
            if (request()->is('api/*')) {
              return $this->sendError('Validation Error.', $validator->errors());
            } else {
              return back()->withErrors($validator->errors());
            }
          }

        if($request->image)
        {
            $file = Str::random(12).time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('img'), $file);
            $path = 'img/'.$file;
        }else{
            $file =  "slide-3.jpg";
            $path = "site/img/slide-3.jpg";
        }



          Article::create([
            'title' => $request->name,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'path'=> $path,
            'image'=> $file,
            'type_article_id' => $request->type,
          ]);

          return redirect()->route('article.index')->with('success','Article enregistre avec succes');

    }

    public function edit($token)
    {
        $article = Article::where('token',$token)->first();
        $types = TypeArticle::orderBy('name')->get();


        if(!$article)
        {
            return back()->with('info','Article introuvable');
        }

        return view('admin.articles.edit',compact('types','article'));
    }
    public function show($token)
    {
        $article = Article::where('token',$token)->first();

        if(!$article)
        {
            return back()->with('info','Article introuvable');
        }

        return view('admin.articles.show',compact('article'));
    }
    public function update(Request $request, $token)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'content' => 'required',
            'type' => 'required',
          ]);

          if ($validator->fails()) {
            if (request()->is('api/*')) {
              return $this->sendError('Validation Error.', $validator->errors());
            } else {
              return back()->withErrors($validator->errors());
            }
          }
          $article = Article::where('token',$token)->first();

          $article->update([
            'title' => $request->name,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'type_article_id' => $request->type,
          ]);


          return redirect()->route('article.index')->with('success','Type de article enregistre avec succes');
    }
    public function destroy($id)
    {
        Article::where('token',$id)->first()->delete();
        return back()->with('success','Suppression effectuée avec succès');
    }

}

