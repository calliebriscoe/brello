<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
  /**
  * Get the tags of the task.
  */

  public function tasks()
  {
      return $this->belongsToMany('App\task');
  }
}
