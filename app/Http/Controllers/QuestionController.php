<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Question;
use Auth;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show Database

        $question = Question::all();

        //dd($questions);
        return view('question.index',['questions' => $question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validator
        // $this->validate($request,[
        //   'title'=>'require',
        //   'discription' => 'require',
        //   'Qcoin' => 'require',
        // ]);

        $titles = $request -> title;
        $discriptions = $request -> discription;
        $Qcoins = $request -> Qcoin;
        $UserQIds = $request -> UserQId;
        $id = Auth::id();
        //create
        // return ($id);
        $questions = new question;

        $questions->title = $titles;
        $questions->discription = $discriptions;
        $questions->Qcoin = $Qcoins;
        $questions->UserQId = $id;

        $questions->save();

        return redirect()->route('question.index')->with('alert-success','Data Hasbeen Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
      return view('question.show', ['questions' => question::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $question = Question::findOrFail($id);



        return view('question.edit', compact('question'));
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
      // return ($id);
          $titles = $request -> title;
          $discriptions = $request -> discription;
          $Qcoins = $request -> Qcoin;
          $UserQIds = $request -> UserQId;
          // $idu = Auth::id();

          $question = Question::findOrFail($id);

          $question->title = $titles;
          $question->discription = $discriptions;
          $question->Qcoin = $Qcoins;
          // $question->UserQId = $idu;
          $question->save();

          return redirect()->route('question.index')->with('alert-success','Data Hasbeen Saved');
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
        $questions = Question::findOrFail($id);
        $questions->delete();
        return redirect()->route('question.index')->with('alert-success','Data Hasbeen Saved');

    }
}
