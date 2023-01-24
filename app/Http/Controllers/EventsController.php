<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\User;

class EventsController extends Controller
{

    public function index(){
        $salas=Sala::all();

        return view('welcome',['salas'=>$salas]);
    }
    public function create(){
        return view('events.create');
    }

    public function show($id){

        $sala=Sala::findOrFail($id);

        return view('events.show',['sala'=>$sala]);

    }

    public function dashboard(){
        $user=auth()->user();
        return view('events.dashboard');
    }

    public function store(Request $request){
        $sala = new Sala;

        $sala->nome=$request->nomeSala;
        $sala->categoria=$request->categoria;
        $sala->privada=$request->privada;
        $sala->link=$request->link;
        $sala->responsavel=$request->responsavel;
        $sala->senha=$request->senha;


        $sala->save();

        return redirect('/');

    }
}
