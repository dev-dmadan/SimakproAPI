<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
  protected $table = "contact_type";
  public $incrementing = false;

  protected $fillable = ['id', 'name', 'position'];

  public function contact()
  {
    return $this->belongsTo('App\Models\Contact', 'contact_typeId', 'id');
  }
}
