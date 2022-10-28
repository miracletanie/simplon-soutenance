<?php

namespace App\Http\Controllers;

use App\Models\TypeArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = TypeArticle::orderBy('name','asc')->get();
        $all_types = TypeArticle::orderBy('name','asc')->paginate(5);
        return view('admin.type-articles.index',compact('types','all_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type-articles.create');
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
          ]);

          if ($validator->fails()) {
            if (request()->is('api/*')) {
              return $this->sendError('Validation Error.', $validator->errors());
            } else {
              return back()->withErrors($validator->errors());
            }
          }

          TypeArticle::create([
            'name'=> $request->name,
          ]);

          return redirect()->route('type-article.index')->with('success','Type article enregistre avec succes');
    }

    public function edit($id)
    {
        $type = TypeArticle::where('id',$id)->first();

        if(!$type)
        {
            return back()->with('info','Type article introuvable');
        }

        return view('admin.type-articles.edit',compact('type'));
    }

    public function update(Request $request, $token)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
          ]);

          if ($validator->fails()) {
            if (request()->is('api/*')) {
              return $this->sendError('Validation Error.', $validator->errors());
            } else {
              return back()->withErrors($validator->errors());
            }
          }

        $type = TypeArticle::where('token',$token)->first();

        if(!$type)
        {
            return back()->with('info','Type article introuvable');
        }
          $type->update([
            'name'=> $request->name,
          ]);

          return redirect()->route('type-article.index')->with('success','Type de article enregistre avec succes');
    }
    public function destroy($id)
    {
        $type = TypeArticle::where('id',$id)->first();

        if(!$type)
        {
            return back()->with('info','Type Article introvable');
        }
        $type->delete();
        return back()->with('success','Sppression effectée avec succes');
    }


}
