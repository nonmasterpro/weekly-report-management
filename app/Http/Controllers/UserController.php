<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = user::all();

      return view('user.index',['users' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $User = Auth::user();

        return view('user.create', ['user' => $User]);
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
        $name = $request -> name;
        $email = $request -> email;
        $role = $request -> role;
        $mentorId = $request -> mentorId;
        $password = $request -> password;

        $user = new user;

        $user->name = $name;
        $user->email = $email;
        $user->role = $role;
        $user->mentorId = $mentorId;
        $user->password = $password;
        // $question->UserQId = $idu;
        $user->save();

        return redirect('user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $UserQIds = $request -> UserQId;
        // $idu = Auth::id();
        //
        // $question = Question::findOrFail($id);
        //
        // $question->UserQId = $idu;
        // $question->Qcoin = $Qcoins;

        //  $coin = UserCoin::where('legs', '=', 100)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = user::findOrFail($id);



    return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $name = $request -> name;
        $email = $request -> email;
        $role = $request -> role;
        $mentorId = $request -> mentorId;
        $password = $request -> password;

        // $idu = Auth::id();

        $user = user::findOrFail($id);

        $user->name = $name;
        $user->email = $email;
        $user->role = $role;
        $user->mentorId = $mentorId;
        $user->password = $password;
        // $question->UserQId = $idu;
        $user->save();

        // return view('question.indexid');

        return redirect('user')->with('alert-success','Data Hasbeen Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = user::findOrFail($id);
        $user->delete();
        return redirect('user')->with('alert-success','Data Hasbeen Saved');
    }
}
