<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    //
      /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'part_name',
        'car_id'
    ];
        /**
     * Get the car that owns the comment.
     */
    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
