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
        if (Auth::user()) {
            # code...
        
      $user = user::all();

      return view('user.index',['users' => $user]);
       }
        else{
            return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()) {
            # code...
        
        //
        $User = Auth::user();
        $Users = user::all();


        return view('user.create', ['user' => $User],['users' => $Users]);
         }
        else{
            return redirect('/');
        }
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
        $lastname = $request -> lastname;
        $email = $request -> email;
        $role = $request -> role;
        $mentorid = $request -> mentorid;
        $week = $request -> week;
        $password = $request -> password;

        $user = new user;

        $user->name = $name;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->role = $role;
        $user->mentorid = $mentorid;
        $user->week = $week;
        $user->password = bcrypt($password);
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
        if (Auth::user()) {
            # code...
        
        //
        $user = user::findOrFail($id);
        $User = user::all();


    return view('user.edit', compact('user'), ['users' => $User]);
     }
        else{
            return redirect('/');
        }
    }

    public function edit2($id)
    {
        if (Auth::user()) {
            # code...
        
        //
        $user = user::findOrFail($id);
        $User = user::all();


    return view('user.updatePro', compact('user'), ['users' => $User]);
     }
        else{
            return redirect('/');
        }
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
        $lastname = $request -> lastname;
        $email = $request -> email;
        $role = $request -> role;
        $mentorid = $request -> mentorid;
        $week = $request -> week;


        // $password = $request -> password;

        // $idu = Auth::id();

        $user = user::findOrFail($id);

        $user->name = $name;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->role = $role;
        $user->mentorid = $mentorid;
        $user->week = $week;
        // $user->password = $password;
        // $question->UserQId = $idu;
        $user->save();

        // return view('question.indexid');

        return redirect('user')->with('alert-success','Data Hasbeen Saved');
    }


    public function updateProfile(Request $request, $id)
    {
        //
        $sid = $request -> sid;
        $department = $request -> department;
        $fac = $request -> fac;
        $start = $request -> start;
        $end = $request -> end;


        // $password = $request -> password;

        // $idu = Auth::id();

        $user = user::findOrFail($id);

        $user->sid = $sid;
        $user->department = $department;
        $user->fac = $fac;
        $user->start = $start;
        $user->end = $end;
        // $user->password = $password;
        // $question->UserQId = $idu;
        $user->save();

        // return view('question.indexid');

        return redirect('/')->with('alert-success','Data Hasbeen Saved');
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
