<?php

namespace App\Http\Controllers;

use App\Models\Heroes;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['heroes']=Heroes::paginate(5);
        return view('Heroes.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosHeroes = request()->all();
        $datosHeroes = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosHeroes['Foto']=$request->file('Foto')->store('uploads','public');
            
        }

        Heroes::insert($datosHeroes);

        return response()->json($datosHeroes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function show(Heroes $heroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $heroes=Heroes::findOrFail($id);

        return view('Heroes.edit', compact('heroes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosHeroes = request()->except(['_token','_method']);
        Heroes::where('id','=',$id)->update($datosHeroes);

        $heroes=Heroes::findOrFail($id);
        return view('Heroes.edit', compact('heroes'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Heroes::destroy($id);
        return  redirect('Heroes');
    }
}
