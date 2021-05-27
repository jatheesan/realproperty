<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropartyType extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proparty_types';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'type_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'type_name'
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
    



}
