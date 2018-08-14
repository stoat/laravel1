<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'car_name',
        'car_make'
    ];
    /**
     * Get the comments for the blog post.
     */
    public function parts()
    {
        return $this->hasMany('App\Part');
    }
}
