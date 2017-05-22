<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
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
      $User = Auth::user();
      $ids = $User->mentorId;

      $ids = explode(",", $ids);
      $question = array();
      foreach($ids as $id) {
      $q = question::where('mentorId', $id)->get();
          // if(!is_null($q['questions'])) {
              // $question = array_merge($question, $q['questions']->toArray());
          // }
      }
      return view('question.index', ['questions' => $q], ['user' => $User]);

        // $question = Question::all();
        //
        // return view('question.index',['questions' => $question]);
    }


      public function CalCoin(){

        return $ids = Auth::id();

        // $CoinUser = User::find($ids) with-> Question::$UserQId;



}


    public function indexid()
    {

        $ids = Auth::id();
        $User = Auth::user();
        $ids = explode(",", $ids);
        $question = array();
        foreach($ids as $id) {
        $q = question::where('userId', $id)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }
        return view('question.indexid', ['questions' => $q], ['user' => $User]);

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

        return view('question.create', ['user' => $User]);
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
        $UserQIds = $request -> username;
        $Status = $request -> status;
        $MentorId = $request -> mentorId;


        // $userCoin= Auth::user()->coin;
        // $result = $userCoin - $Qcoins;

        // return $result;

        $id = Auth::id();
        $User = Auth::user();

        // return ($id);

        $questions = new question;

        $questions->title = $titles;
        $questions->discription = $discriptions;
        $questions->Qcoin = $Qcoins;
        $questions->username = $User->name;
        $questions->userId = $id;
        $questions->status = $Status;
        $questions->mentorId = $MentorId;


        // $User->coin = $result;

        // $User->save();
        $questions->save();

        return redirect('question/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $User = Auth::user();

      $ids = $id;
      $ids = explode(",", $ids);

      foreach($ids as $i) {
      $q = answer::where('QId', $i)->get();
      }


      return view('question.show', ['questions' => question::findOrFail($id)],['user' => $User]);

    }

    public function createAns()
    {
        return view('question.answer');
    }

    public function storeAns(Request $request,$id)
    {
      ///////
            $idu = Auth::id();

          return  $answerss = $request -> answer;

            $ans = new answer;

            $ans->answer = $answerss;
            $ans->UserId = $idu;
            $ans->QId = $id;

            $ans->save();
      ///////

      return redirect()->route('question.show')->with('alert-success','Data Hasbeen Saved');

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
          $MentorId = $request -> mentorId;

          // $idu = Auth::id();

          $question = Question::findOrFail($id);

          $question->title = $titles;
          $question->discription = $discriptions;
          $question->Qcoin = $Qcoins;
          $question->mentorId = $MentorId;
          $question->status = 1;
          // $question->UserQId = $idu;
          $question->save();

          // return view('question.indexid');

          return redirect('question/user')->with('alert-success','Data Hasbeen Saved');
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
        return redirect('question/user')->with('alert-success','Data Hasbeen Saved');

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function updatestatusA($id)
    {
        $question = Question::findOrFail($id);
        $question->update(['status' => 2]);
        // dd($question);

        return redirect('question');

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function updatestatusR($id)
    {
        $question = Question::findOrFail($id);
        $question->update(['status' => 3]);
        // dd($question);

        return redirect('question');

    }
}
