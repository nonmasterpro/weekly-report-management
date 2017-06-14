<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('sid')->nullable()->default(null); //
            $table->string('department')->nullable()->default(null); //
            $table->string('fac')->nullable()->default(null); //
            $table->date('start')->nullable()->default(null); //
            $table->date('end')->nullable()->default(null); //
            $table->string('position');
            $table->string('email');
            $table->string('password');
            $table->integer('role')->default(1);
            $table->integer('week')->nullable()->default(null);
            $table->string('mentorid')->nullable()->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
