<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    //
        /**
     * Get the car that owns the comment.
     */
    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
