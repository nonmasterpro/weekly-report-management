<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly', function (Blueprint $table) {
          $table->increments('id');
          $table->date('title');
          $table->string('discription');
          $table->string('Qcoin'); //->default(100.0)
          $table->string('username');
          $table->integer('userId');
          $table->integer('status');
          $table->integer('mentorid');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weekly');
    }
}
