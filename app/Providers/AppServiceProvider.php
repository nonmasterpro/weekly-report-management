<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
       {
          // $id = Auth::id();
          //
          // $question = Question::findOrFail($id);
          //
          // $ids = $id;
          // $ids = explode(",", $ids);
          //
          // foreach($ids as $i) {
          // $q = question::where('mentorId', $i)->get();
          // }
          //
          // view()->share('question', ['qq'=> $q] , ['questions' => $question]);
       }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
