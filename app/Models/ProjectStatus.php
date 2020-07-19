<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
  protected $table = "project_status";
  public $incrementing = false;

  public $fillable = ['id', 'name', 'position'];
}
