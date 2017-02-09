<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $fillable = [
      'aantal',
      'voornaam',
      'naam',
      'email',
      'tel',
      'opmerkingen',
      'bevestigd',
      'datetime'
      ];

}
