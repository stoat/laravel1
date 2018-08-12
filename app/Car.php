<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
        /**
     * Get the comments for the blog post.
     */
    public function parts()
    {
        return $this->hasMany('App\Part');
    }
}
