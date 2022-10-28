<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\ImageBien;
use App\Models\Visite;
use App\Models\TypeBien;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biens = Bien::orderBy('created_at','asc')->paginate(10);
        $count_biens = Bien::count();

        return view('admin.biens.index',compact('biens','count_biens'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = TypeBien::orderBy('name')->get();
        return view('admin.biens.create',compact('types'));
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
            'location' => 'required',
            'price' => 'required',
            'area' => 'required',
            'type' => 'required',
          ]);

          if ($validator->fails()) {
            if (request()->is('api/*')) {
              return $this->sendError('Validation Error.', $validator->errors());
            } else {
              return back()->withErrors($validator->errors());
            }
          }
          $bien = Bien::create([
            'name' => $request->name,
            'location' => $request->location,
            'price' => $request->price,
            'area' => $request->area,
            'type_bien_id' => $request->type,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'description' => $request->description,
            'garage' => $request->garage,
            'status' => "enregistrer"
          ]);

          if($request->images)
          {
              foreach($request->images as $image)
              {
                $file = Str::random(12).time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('img'), $file);
                $path = 'img/'.$file;

                ImageBien::create([
                    'name' => $file,
                    'path' => $path,
                    'bien_id' => $bien->id
                ]);

              }

          }

          return redirect()->route('bien.index')->with('success','Bien enregistre avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
        $bien = Bien::where('token',$token)->first();

        if(!$bien)
        {
            return back()->with('info','Bien introuvable');
        }

        return view('admin.biens.show',compact('bien'));
    }

    public function visite($token)
    {
        $bien = Bien::where('token',$token)->first();

        if(!$bien)
        {
            return back()->with('info','Bien introuvable');
        }

        $visites = Visite::where('bien_id',$bien->id)->paginate(10);

        return view('admin.biens.visite',compact('bien','visites'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($token)
    {
        $bien = Bien::where('token',$token)->first();
        $types = TypeBien::orderBy('name')->get();

        if(!$bien)
        {
            return back()->with('info','Bien introuvable');
        }

        return view('admin.biens.edit',compact("bien","types"));
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
            'location' => 'required',
            'price' => 'required',
            'area' => 'required',
            'type' => 'required',
          ]);

          if ($validator->fails()) {
            if (request()->is('api/*')) {
              return $this->sendError('Validation Error.', $validator->errors());
            } else {
              return back()->withErrors($validator->errors());
            }
          }
          $bien = Bien::where('token',$token)->first();

          if(!$bien)
          {
              return back()->with('info','Type bien introvable');
          }

          $bien->update([
            'name' => $request->name,
            'location' => $request->location,
            'price' => $request->price,
            'area' => $request->area,
            'type_bien_id' => $request->type,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'description' => $request->description,
            'garage' => $request->garage,
            'status' => "enregistrer"
          ]);

          return redirect()->route('bien.index')->with('success','Bien enregistre avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bien::where('token',$id)->first()->delete();
        return back()->with('success','Suppression effectuée avec succès');
    }


}
