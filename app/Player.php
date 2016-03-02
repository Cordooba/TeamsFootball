<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Team;
use DB;

class Player extends Model
{
  protected $fillable = ['team_id', 'name', 'nationality', 'position', 'dorsal', 'birthday'];

  public function team ()
  {
    return $this->belongsTo(Team::class);
  }

}
