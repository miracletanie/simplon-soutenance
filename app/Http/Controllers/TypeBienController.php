<?php

namespace App\Http\Controllers;

use App\Models\TypeArticle;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeBienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = TypeBien::orderBy('name','asc')->get();
        $all_types = TypeBien::orderBy('name','asc')->paginate(5);
        return view('admin.type-biens.index',compact('types','all_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type-biens.create');
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

          TypeBien::create([
            'name'=> $request->name,
          ]);

          return redirect()->route('type-bien.index')->with('success','Type de bien enregistre avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($token)
    {
        $type = TypeBien::where('token',$token)->first();

        if(!$type)
        {
            return back()->with('info','Type bien introuvable');
        }

        return view('admin.type-biens.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        $type = TypeBien::where('token',$token)->first();

        if(!$type)
        {
            return back()->with('info','Type bien introvable');
        }
          $type->update([
            'name'=> $request->name,
          ]);

          return redirect()->route('type-bien.index')->with('success','Type de bien enregistre avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = TypeBien::where('token',$id)->first();

        if(!$type)
        {
            return back()->with('info','Type bien introvable');
        }
        $type->delete();
        return back()->with('success','Sppression effectee avec succes');
    }

}
