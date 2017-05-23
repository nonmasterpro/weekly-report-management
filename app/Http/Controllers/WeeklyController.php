<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Question;
use App\Weekly;
use App\Answer;
use App\User;
use Auth;
class WeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $User = Auth::user();
      $ids = $User->mentorid;

      $ids = explode(",", $ids);
      $question = array();
      foreach($ids as $id) {
      $q = weekly::where('mentorid', $id)->get();
          // if(!is_null($q['questions'])) {
              // $question = array_merge($question, $q['questions']->toArray());
          // }
      }
      return view('weekly.index', ['weeklys' => $q], ['user' => $User]);

        // $question = Question::all();
        //
        // return view('question.index',['questions' => $question]);
    }



    public function indexid()
    {

        $ids = Auth::id();
        $User = Auth::user();
        $ids = explode(",", $ids);
        $question = array();
        foreach($ids as $id) {
        $q = weekly::where('userId', $id)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }
        return view('weekly.indexid', ['weeklys' => $q], ['user' => $User]);

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
        $user = user::all();
        $weekly = weekly::all();


        return view('weekly.create', ['user' => $User],['users' => $user],compact('weekly'));
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
        $mentorid = $request -> mentorid;


        // $userCoin= Auth::user()->coin;
        // $result = $userCoin - $Qcoins;

        // return $result;

        $id = Auth::id();
        $User = Auth::user();

        // return ($id);

        $questions = new weekly;

        $questions->title = $titles;
        $questions->discription = $discriptions;
        $questions->Qcoin = $Qcoins;
        $questions->username = $User->name;
        $questions->userId = $id;
        $questions->status = $Status;
        $questions->mentorid = $mentorid;


        // $User->coin = $result;

        // $User->save();
        $questions->save();

        return redirect('weekly/user');
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


      return view('weekly.show', ['weeklys' => weekly::findOrFail($id)],['user' => $User]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $weekly = weekly::findOrFail($id);
            $user = user::all();



        return view('weekly.edit', compact('weekly'), ['users'=>$user]);
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
          $mentorid = $request -> mentorid;

          // $idu = Auth::id();

          $question = weekly::findOrFail($id);

          $question->title = $titles;
          $question->discription = $discriptions;
          $question->Qcoin = $Qcoins;
          $question->mentorid = $mentorid;
          $question->status = 1;
          // $question->UserQId = $idu;
          $question->save();

          // return view('question.indexid');

          return redirect('weekly/user')->with('alert-success','Data Hasbeen Saved');
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
        $questions = weekly::findOrFail($id);
        $questions->delete();
        return redirect('weekly/user')->with('alert-success','Data Hasbeen Saved');

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
        $question = weekly::findOrFail($id);
        $question->update(['status' => 2]);
        // dd($question);

        return redirect('weekly');

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
        $question = weekly::findOrFail($id);
        $question->update(['status' => 3]);
        // dd($question);

        return redirect('weekly');

    }
}