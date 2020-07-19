<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActiveStatus extends Model
{
  protected $table = "active_status";
  public $incrementing = false;

  public $fillable = ['id', 'name', 'position'];

  public function contact()
  {
    return $this->belongsTo('App\Models\Contact', 'active_statusId', 'id');
  }
}
