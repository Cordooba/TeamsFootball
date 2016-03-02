<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Player;
use DB;

class Team extends Model
{

  protected $fillable = ['name', 'city', 'foundation', 'supporters', 'stadium'];

  public function players ()
  {
    return $this->hasMany(Player::class);
  }

  public function addPlayer (Player $player)
  {
      //$jugador = Player::find($player);
      return $this->player()->save($player);
  }

}
