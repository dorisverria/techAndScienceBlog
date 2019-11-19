<?php

namespace App\Http\Controllers;
use App\Quack;
use Illuminate\Http\Request;
use DB;
use Auth;

class QuackController extends Controller
{
    public function getIndex() {
        $quacks = Quack::orderBy('updated_at', 'desc')->take(3)->get();
        $randomQuacksArr = DB::select('SELECT * FROM quacks ORDER BY RAND() LIMIT 5');    
        $randomQuacks = Quack::hydrate($randomQuacksArr);        
        return view('application.index', ['quacks' => $quacks, 'randomQuacks' => $randomQuacks]);
    }  
    
    public function getQuack($id) {
        $quack = Quack::find($id);
        return view('application.quack', ['quack'=>$quack]);
    }

    public function getMyQuacks() {
        $quacks = Quack::where('user_id',Auth::user()->id)->get();
        return view('application.personal_quacks', ['quacks'=>$quacks]);
    }

    public function getCreateQuack() {
        return view('application.create');
    }

    public function postCreateQuack(Request $request) {
        $quack = new Quack();
        $quack->title = $request->input('title');
        $quack->text = $request->input('content');
        $quack->user_id = Auth::id();
        $quack->save();
        return redirect( route('application.myQuacks'));
    }

    public function getEditQuack($id) {
        $quack = Quack::find($id);
        return view('application.edit', ['quack'=>$quack]);
    }

    public function postEditQuack($id, Request $request) {
        $quack = Quack::find($id);
        $quack->title = $request->input('title');
        $quack->text = $request->input('content');
        $quack->save();
        return redirect( route('application.myQuacks'));
    }

    public function deleteQuack(Request $request) {
        $id = $request->input('quackID');
        $quack = Quack::find($id);
        $quack->delete();
        return redirect( route('application.myQuacks'));
    }
 }

