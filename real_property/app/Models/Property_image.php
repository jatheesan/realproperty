<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_image extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'property_images';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'image',
                  'is_main',
                  'proparty_id'
                ];

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = [];
                
    /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
    protected $casts = [];

    /**
     * Get the propertytype for this model.
     *
     * @return App\Models\Proparty
     */
    public function property()
    {
        return $this->belongsTo('App\Models\Proparty','proparty_id');
    }
}
