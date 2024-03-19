<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
public function Afficher($id)
{
 $etudiants=array(
    array(1,"SLIMANI","sara"),
    array(2,"AMAMI","Karim"),
    array(3,"OUAHABI","Leila")
 );
$etd=null;
 foreach($etudiants as $E)
 if($E[0]==$id)
 $etd=$E;
  $data=["etd"=>$etd];
  return view("Etudiant.afficher",$data);   
}

public function Affiche($id)
{
$E=Etudiant::find($id);
return view("Etudiant.afficher",["etd"=>$E]);
}

public function index()
{
   
return view("Etudiant.index",["etds"=>Etudiant::all()]);
}
}
