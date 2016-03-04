<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
  /**
  * Get the tasks of the tag.
  */

  public function taskTagged()
  {
      return $this->belongsToMany('App\tag');
  }

    /**
    * Get the lane this task is in.
    */
    public function lane()
    {
       return $this->belongsTo('App\lane');
    }
}
