<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessRight extends Model
{
  protected $table = 'access_right';
  public $incrementing = false;

  protected $fillable = ['id', 'userId', 'accessId', 'isCanInsert', 'isCanUpdate', 'isCanDelete', 'isCanExport'];

  public function user()
  {
    return $this->hasOne('App\Models\User', 'id', 'userId');
  }

  public function access()
  {
    return $this->hasOne('App\Models\Access', 'id', 'accessId');
  }
}
