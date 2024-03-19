<?php

namespace App\Http\Controllers;

use App\Models\Administratif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdministratifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("Administratif.index",["admins"=>Administratif::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("Administratif.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $A=new Administratif();
     $A->nom=$request->nom;
     $A->prenom=$request->prenom;
     $A->email=$request->email;
     $A->save();
  
     return Redirect("/administratifs");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administratif  $administratif
     * @return \Illuminate\Http\Response
     */
    public function show(Administratif $administratif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administratif  $administratif
     * @return \Illuminate\Http\Response
     */
    public function edit($administratif)
    {
        return view("Administratif.edit",["Admin"=>Administratif::find($administratif)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administratif  $administratif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $A=Administratif::find($id);
        $A->nom=$request->input("nom");
        $A->prenom=$request->input("prenom");
        $A->email=$request->email;
        $A->save();
        return Redirect("/administratifs");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administratif  $administratif
     * @return \Illuminate\Http\Response
     */
    public function destroy($administratif)
    {
    $A=Administratif::findOrFail($administratif);
    $A->delete();
    return Redirect("/administratifs");
    }
}
