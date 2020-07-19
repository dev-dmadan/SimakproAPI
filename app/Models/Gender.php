<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
  protected $table = "gender";
  public $incrementing = false;

  public $fillable = ['id', 'name', 'position'];

  public function contact()
  {
    return $this->belongsTo('App\Models\Contact', 'genderId', 'id');
  }
}
