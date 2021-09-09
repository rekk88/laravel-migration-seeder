<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip; //richiamo il model per poter leggere i dati dal db

class MigrationController extends Controller
{
  public function index(){
    return view('welcome');
  }

  public function showAll(){
    $gite = Trip::all(); //carico il db in una variabile
    // return view('show')->with('trips',$gite);
    // dd($gite);
    return view('show' , ['vacanze' => $gite]);
  }
}
