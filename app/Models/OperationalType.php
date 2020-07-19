<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationalType extends Model
{
  protected $table = "operational_type";
  public $incrementing = false;

  public $fillable = ['id', 'name', 'position'];
}
