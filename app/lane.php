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


   /**
   * Get the tags of the lane.
   */
  public function tags()
  {
      return $this->hasMany('App\tag');
  }

}
