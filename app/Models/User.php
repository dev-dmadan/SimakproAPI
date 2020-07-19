<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table = 'user';
  public $incrementing = false;

  protected $fillable = ['id', 'username', 'password', 'contactId'];

  protected $hidden = ['password'];

  public function contact()
  {
    return $this->hasOne('App\Models\Contact', 'id', 'contactId');
  }

  public function created_by()
  {
    return $this->hasOne('App\Models\Contact', 'id', 'created_by');
  }

  public function updated_by()
  {
    return $this->hasOne('App\Models\Contact', 'id', 'updated_by');
  }

  public function access_right()
  {
    return $this->belongsTo('App\Models\AccessRight', 'userId', 'id');
  }
}
