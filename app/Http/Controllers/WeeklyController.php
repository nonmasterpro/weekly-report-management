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

    if (Auth::user()) {
        # code...
      $User = Auth::user();
      $ids = $User->mentorid;
      $name = $User->name;

      $name = explode(",", $name);
      $question = array();
      foreach($name as $id) {
      $q = weekly::where('mentorid', $id)->get();
        
      }
      return view('weekly.index', ['weeklys' => $q], ['user' => $User]);
    }
    else{
        return redirect('/');
    }
      ////////////

        // $question = Question::all();
        //
        // return view('question.index',['questions' => $question]);
    }



    public function indexid()
    {

        if (Auth::user()) {
            # code...
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
        else{
            return redirect('/');
        }
    }

    public function indexintern()
    {

        if (Auth::user()) {
            # code...
        $ids = Auth::id();
        $User = Auth::user();
        $u = $User->name;
        $u = explode(",", $u);
        $question = array();
        foreach($u as $us) {
        $q = user::where('mentorid', $us)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }
        return view('weekly.weeklyIntern', ['users' => $q], ['user' => $User]);
        }
        else{
            return redirect('/');
        }
    }

    public function indexinternreport($id)
    {

        if (Auth::user()) {
            # code...
        $id_intern = $id;
        $ids = Auth::id();
        $User = Auth::user();
        $u = $User->name;
        $id = explode(",", $id);
        $question = array();
        foreach($id as $idd) {
        $q = weekly::where('userId', $idd)->where('status',1)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }
        return view('weekly.weeklyInternReport', ['reports' => $q, 'id_intern' => $id_intern], ['user' => $User]);
        }
        else{
            return redirect('/');
        }
    }

    public function indexinternreportApp($id)
    {

        if (Auth::user()) {
            # code...
        $id_intern = $id;
        $ids = Auth::id();
        $User = Auth::user();
        $u = $User->name;
        $id = explode(",", $id);
        $question = array();
        foreach($id as $idd) {
        $q = weekly::where('userId', $idd)->where('status',2)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }
        return view('weekly.weeklyInternAp', ['reports' => $q, 'id_intern' => $id_intern], ['user' => $User]);
        }
        else{
            return redirect('/');
        }
    }

    public function indexinternreportRej($id)
    {

        if (Auth::user()) {
            # code...
        $id_intern = $id;
        $ids = Auth::id();
        $User = Auth::user();
        $u = $User->name;
        $id = explode(",", $id);
        $question = array();
        foreach($id as $idd) {
        $q = weekly::where('userId', $idd)->where('status',3)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }
        return view('weekly.weeklyInternRej', ['reports' => $q, 'id_intern' => $id_intern], ['user' => $User]);
        }
        else{
            return redirect('/');
        }
    }
    public function indexid2()
    {

        if (Auth::user()) {
            # code...
        $ids = Auth::id();
        $User = Auth::user();
        $ids = explode(",", $ids);
        $question = array();
        foreach($ids as $id) {
        $q = weekly::where('userId', $id)->orderby('id','desc')->limit(5)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }
        return view('welcome', ['weeklys' => $q], ['user' => $User]);
        }
        else{
            return redirect('/');
        }
    }

    public function weeklyday($id){

        if (Auth::user()) {

        $User = Auth::user();
        $id = explode(",", $id);
        foreach($id as $ids) {
        $q = weekly::where('week', $ids)->where('username',$User->name)->get();
            
        }
        return view('weekly.weeklyday',['reports' => $q ,'user' => $User ,'idweek' => $id ]);
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
        $user = user::all();
        $weekly = weekly::all();


        return view('weekly.create', ['user' => $User],['users' => $user],compact('weekly'));
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
        $week = $request -> week;



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
        $questions->week = $week;
        $questions->comment = "null";

        // $User->coin = $result;

        // $User->save();
        $questions->save();

        return redirect('weekly/'.$week.'/day');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()) {
            # code...
        
      $User = Auth::user();
      $ids = $id;
      $ids = explode(",", $ids);
      foreach($ids as $i) {
      $q = weekly::where('userId', $i)->get();
      }

      return view('weekly.show', ['weeklys' => weekly::findOrFail($id)],['user' => $User, 'q'=>$q]);
       }
        else{
            return redirect('/');
        }
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
        
            $weekly = weekly::findOrFail($id);
            $user = user::all();
            $User = Auth::user();



        return view('weekly.edit', compact('weekly'), ['user'=>$User], ['users'=>$user]);
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
      // return ($id);
          $titles = $request -> title;
          $discriptions = $request -> discription;
          $Qcoins = $request -> Qcoin;
          $UserQIds = $request -> UserQId;
          $mentorid = $request -> mentorid;
          $week = $request -> week;


          // $idu = Auth::id();

          $question = weekly::findOrFail($id);

          $question->title = $titles;
          $question->discription = $discriptions;
          $question->Qcoin = $Qcoins;
          $question->mentorid = $mentorid;
          $question->week = $week;
          $question->status = 1;
          // $question->UserQId = $idu;
          $question->save();

          // return view('question.indexid');

          return redirect('weekly/'.$week.'/day')->with('alert-success','Data Hasbeen Saved');
    }

    public function updateComment(Request $request, $id)
    {
      $comments = $request -> comment;
      $question = weekly::findOrFail($id);
      $question->comment = $comments;
      $question->save();
      return redirect('weekly/'.$id);

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
        return redirect('weekly/'.$questions->week.'/day')->with('alert-success','Data Hasbeen Saved');

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

        return redirect('weekly/'.$question->userId.'/report');

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

        return redirect('weekly/'.$question->userId.'/report');

    }

    public function printReport($id)
    {
        if (Auth::user()) {
            # code...
        

        $User = Auth::user();
        $aa="$id";

        $ids = Auth::id();
        $ids = explode(",", $ids);
        $question = array();

        $id = explode(",", $id);


        foreach($ids as $idd) {
        $q = weekly::where('userId', $idd)->get();
            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }

         foreach($id as $ide) {
        $a = weekly::where('week', $ide)->where('username', $User->name)->get();

            // if(!is_null($q['questions'])) {
                // $question = array_merge($question, $q['questions']->toArray());
            // }
        }



        // $data['weeklys'] = $a;
        // $data['user'] = $User;
        // $data['asd']   =$aa;

        return view('weekly.print',['weeklys' => $a,'user' => $User,'asd' => $aa]);

         }
        else{
            return redirect('/');
        }


    }
}
