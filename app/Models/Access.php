<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
  protected $table = "access";
  public $incrementing = false;

  protected $fillable = ['id', 'name', 'title', 'icon', 'position'];

  public function access_right()
  {
    return $this->belongsTo('App\Models\AccessRight', 'accessId', 'id');
  }
}
