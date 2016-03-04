<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lane extends Model
{

   /**
   * Get the tasks of the lane.
   */
  public function tasks()
  {
      return $this->hasMany('App\task');
  }

}
