<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proparty extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proparties';

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
                  'first_pastcode',
                  'second_pastcode',
                  'post_town',
                  'post_city',
                  'post_country',
                  'display_address',
                  'condition_of_property',
                  'furnished_property',
                  'accessability',
                  'heating_type',
                  'is_burglar_alarm',
                  'is_cctv',
                  'bill',
                  'enquiry_contact',
                  'enquiry_email',
                  'sale_condition',
                  'rent_condition',
                  'property_details',
                  'property_details_display',
                  'no_of_bedrooms',
                  'no_of_halls',
                  'no_of_reseptions',
                  'floors',
                  'parking',
                  'garden',
                  'internal_area',
                  'land_area',
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
                  'owner',
                  'is_publish'
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

    public function ownerman()
    {
        return $this->belongsTo('App\Models\Owner','owner');
    }

    /**
     * Set the furnished_property.
     *
     * @param  string  $value
     * @return void
     */
    public function setFurnishedPropertyAttribute($value)
    {
        $this->attributes['furnished_property'] = json_encode($value);
    }

    /**
     * Set the accessability.
     *
     * @param  string  $value
     * @return void
     */
    public function setAccessabilityAttribute($value)
    {
        $this->attributes['accessability'] = json_encode($value);
    }

    /**
     * Set the heating_type.
     *
     * @param  string  $value
     * @return void
     */
    public function setHeatingTypeAttribute($value)
    {
        $this->attributes['heating_type'] = json_encode($value);
    }

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

    /**
     * Get furnished_property in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getFurnishedPropertyAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get accessability in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getAccessabilityAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get heating_type in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getHeatingTypeAttribute($value)
    {
        return json_decode($value) ?: [];
    }

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
