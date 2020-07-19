<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentStatus extends Model
{
  protected $table = "payment_status";
  public $incrementing = false;

  public $fillable = ['id', 'name', 'position'];
}
