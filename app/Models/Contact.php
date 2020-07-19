<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contact';
  public $incrementing = false;

  protected $fillable = [
    'id', 'name', 'birthplace', 'birthdate', 'genderId', 'address', 'email', 'phoneNumber',
    'image', 'contact_typeId', 'active_statusId', 'saldo', 'created_by', 'updated_by'
  ];

  public function gender()
  {
    return $this->hasOne('App\Models\Gender', 'id', 'genderId');
  }

  public function contact_type()
  {
    return $this->hasOne('App\Models\ContactType', 'id', 'contact_typeId');
  }

  public function active_status()
  {
    return $this->hasOne('App\Models\ActiveStatus', 'id', 'active_statusId');
  }

  public function created_by()
  {
    return $this->hasOne('App\Models\Contact', 'id', 'created_by');
  }

  public function updated_by()
  {
    return $this->hasOne('App\Models\Contact', 'id', 'updated_by');
  }

  public function user()
  {
    return $this->belongsTo('App\Models\User', 'contactId', 'id');
  }
}
