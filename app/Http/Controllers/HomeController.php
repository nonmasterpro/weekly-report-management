<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Question;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $User = Auth::user();

        return view('home',['user' => $User]);
    }

    public function create(Request $request)
    {
      $title = $request -> title;
      $discription = $request -> discription;
      $Qcoin = $request -> Qcoin;
      $UserQId = $request -> UserQId;

      $id = Auth::id();

      $question = new Question;

      $question->title = $title;
      $question->discription = $discription;
      $question->Qcoin = $Qcoin;
      $question->UserQId = $id;

      $question->save();
      return view('home');

    }
}
