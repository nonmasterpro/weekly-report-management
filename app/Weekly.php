<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekly extends Model
{
  protected $table = 'weekly';
  protected $guarded = [];

  public function User()
  {
      return $this->belongsTo('App\User');
  }
}
