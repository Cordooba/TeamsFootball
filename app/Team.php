<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Player;

class Team extends Model
{

  protected $fillable = ['id'];

  public function player ()
  {
    return $this->hasMany(Player::class);
  }

}
