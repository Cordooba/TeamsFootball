<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Player;

class Team extends Model
{

  protected $fillable = ['id'];

  public function players ()
  {
    return $this->hasMany(Player::class);
  }

  public function addTeam (Team $team) {
     return $this->save($team);
   }

}
