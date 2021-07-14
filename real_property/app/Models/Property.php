<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Property extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'properties';

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
                  'catagery',
                  'type',
                  'age',
                  'minimum_term',
                  'door_no',
                  'door_name',
                  'first_postcode',
                  'second_postcode',
                  'street_name',
                  'second_line_of_address',
                  'post_town',
                  'post_city',
                  'post_country',
                  'display_address_line1',
                  'display_address_line2',
                  'display_address',
                  'condition_of_property',
                  'condition_furnished',
                  'access_type',
                  'heating_type',
                  'bill',
                  'is_burglar_alarm',
                  'is_cctv',
                  'is_swimmingpool',
                  'enquiry_contact',
                  'enquiry_email',
                  'sale_condition',
                  'rent_condition',
                  'bedrooms',
                  'bathrooms',
                  'halls',
                  'reseptions',
                  'floors',
                  'parking',
                  'garden',
                  'internal_area',
                  'land_area',
                  'area_unit',
                  'price',
                  'price_flag',
                  'rent_frequency',
                  'deposite',
                  'deposite_flag',
                  'admin_fee_max',
                  'admin_fee_exe',
                  'admin_fee_flag',
                  'date_intake',
                  'date_published',
                  'date_revoked',
                  'further_details',
                  'property_details',
                  'property_details_display',
                  'owner',
                  'is_complete',
                  'is_publish',
                  'is_sold',
                  'is_let'
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
     * @return App\Models\PropartyType
     */
    public function propertytype()
    {
        return $this->belongsTo('App\Models\PropartyType','type');
    }

    /**
     * Get the owner for this model.
     *
     * @return App\Models\Owner
     */
    public function owner()
    {
        return $this->belongsTo('App\Models\Owner','owner');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Property_image');
    }

    public function scopeAreaBetween(Builder $query, $from, $to): Builder
    {
        if($from == "" && $to == "")
        {
            return $query->Where('internal_area', '>', 0);
        }
        elseif($from == "")
        {
            return $query->Where('internal_area', '<', $to);
        }
        else
        {
            return $query->whereBetween('internal_area', array($from, $to));
        }
        
    }

    public function scopePriceBetween(Builder $query, $from, $to): Builder
    {
        return $query->whereBetween('price', array($from, $to));      
    }

    // /**
    //  * Set the condition_of_property.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setConditionOfPropertyAttribute($value)
    // {
    //     $this->attributes['condition_of_property'] = json_encode($value);
    // }

    // /**
    //  * Set the condition_furnished.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setConditionFurnishedAttribute($value)
    // {
    //     $this->attributes['condition_furnished'] = json_encode($value);
    // }

    // /**
    //  * Set the access_type.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setAccessTypeAttribute($value)
    // {
    //     $this->attributes['access_type'] = json_encode($value);
    // }

    // /**
    //  * Set the heating_type.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setHeatingTypeAttribute($value)
    // {
    //     $this->attributes['heating_type'] = json_encode($value);
    // }

    // /**
    //  * Set the bill.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setBillAttribute($value)
    // {
    //     $this->attributes['bill'] = json_encode($value);
    // }

    /**
     * Set the parking.
     *
     * @param  string  $value
     * @return void
     */
    public function setParkingAttribute($value)
    {
        $this->attributes['parking'] = json_encode($value);
    }

    /**
     * Set the garden.
     *
     * @param  string  $value
     * @return void
     */
    public function setGardenAttribute($value)
    {
        $this->attributes['garden'] = json_encode($value);
    }

    /**
     * Set the sale_condition.
     *
     * @param  string  $value
     * @return void
     */
    public function setSaleConditionAttribute($value)
    {
        $this->attributes['sale_condition'] = json_encode($value);
    }

    /**
     * Set the rent_condition.
     *
     * @param  string  $value
     * @return void
     */
    public function setRentConditionAttribute($value)
    {
        $this->attributes['rent_condition'] = json_encode($value);
    }

    /**
     * Set the further_details.
     *
     * @param  string  $value
     * @return void
     */
    public function setFurtherDetailsAttribute($value)
    {
        $this->attributes['further_details'] = json_encode($value);
    }

    // /**
    //  * Set the date_intake.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setDateIntakeAttribute($value)
    // {
    //     $this->attributes['date_intake'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    // }

    // /**
    //  * Set the date_published.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setDatePublishedAttribute($value)
    // {
    //     $this->attributes['date_published'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    // }

    // /**
    //  * Set the date_revoked.
    //  *
    //  * @param  string  $value
    //  * @return void
    //  */
    // public function setDateRevokedAttribute($value)
    // {
    //     $this->attributes['date_revoked'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    // }

    // /**
    //  * Get condition_of_property in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getConditionOfPropertyAttribute($value)
    // {
    //     return json_decode($value) ?: [];
    // }

    // /**
    //  * Get condition_furnished in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getConditionFurnishedAttribute($value)
    // {
    //     return json_decode($value) ?: [];
    // }

    // /**
    //  * Get access_type in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getAccessTypeAttribute($value)
    // {
    //     return json_decode($value) ?: [];
    // }

    // /**
    //  * Get heating_type in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getHeatingTypeAttribute($value)
    // {
    //     return json_decode($value) ?: [];
    // }

    // /**
    //  * Get bill in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getBillAttribute($value)
    // {
    //     return json_decode($value) ?: [];
    // }

    /**
     * Get parking in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getParkingAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get garden in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getGardenAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get sale_condition in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getSaleConditionAttribute($value)
    {
        return json_decode($value) ?: [];
    }

     /**
     * Get rent_condition in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getRentConditionAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    
     /**
     * Get property_details_display in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getFurtherDetailsAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    // /**
    //  * Get date_intake in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getDateIntakeAttribute($value)
    // {
    //     return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    // }

    // /**
    //  * Get date_published in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getDatePublishedAttribute($value)
    // {
    //     return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    // }

    // /**
    //  * Get date_revoked in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getDateRevokedAttribute($value)
    // {
    //     return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    // }

}
