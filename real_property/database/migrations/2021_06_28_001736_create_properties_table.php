<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function(Blueprint $table)
        {
            $table->increments('id');
            $table->enum('catagery', ['for sale','for let','for shared'])->nullable();
            $table->integer('type')->unsigned()->nullable()->index();
            $table->enum('age', ['Pre','Post','MidAge'])->nullable();
            $table->enum('minimum_term', ['1 month','6 month','12 month','long term'])->nullable();
            $table->integer('door_no')->nullable();
            $table->string('door_name')->nullable();
            $table->string('first_postcode')->nullable();
            $table->string('second_postcode')->nullable();
            $table->string('street_name')->nullable();
            $table->string('second_line_of_address')->nullable();
            $table->string('post_town')->nullable();
            $table->string('post_city')->nullable();
            $table->string('post_country')->nullable();
            $table->string('display_address_line1')->nullable();
            $table->string('display_address_line2')->nullable();
            $table->boolean('display_address')->nullable();
            $table->enum('condition_of_property', ['Require Painting','Fully Decorated'])->nullable();
            $table->enum('condition_furnished', ['Fully','Partial','None'])->nullable();
            $table->enum('access_type', ['Shared Entry','Seperate Entry'])->nullable();
            $table->enum('heating_type', ['Central','Independent'])->nullable();
            $table->enum('bill', ['Fully Included','Partial'])->nullable();
            $table->boolean('is_burglar_alarm')->nullable();
            $table->boolean('is_cctv')->nullable();
            $table->boolean('is_swimmingpool')->nullable();
            $table->string('enquiry_contact')->nullable();
            $table->string('enquiry_email')->nullable();
            $table->string('sale_condition')->nullable();
            $table->string('rent_condition')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('halls')->nullable();
            $table->integer('reseptions')->nullable();
            $table->integer('floors')->nullable();
            $table->string('parking')->nullable();
            $table->string('garden')->nullable();
            $table->decimal('internal_area', 5, 1)->nullable();
            $table->decimal('land_area', 5, 1)->nullable();
            $table->enum('area_unit', ['sq m','sq cm','sq mm','sq ft','sq inch'])->nullable();
            $table->integer('saleprice')->nullable();
            $table->integer('letamount')->nullable();
            $table->boolean('price_flag')->nullable();
            $table->enum('rent_frequency', ['Weekly','Monthly','Quarter','Half','Annual'])->nullable();
            $table->integer('deposite')->nullable();
            $table->boolean('deposite_flag')->nullable();
            $table->integer('admin_fee_max')->nullable();
            $table->integer('admin_fee_exe')->nullable();
            $table->boolean('admin_fee_flag')->nullable();
            $table->date('date_intake')->nullable();
            $table->date('date_published')->nullable();
            $table->date('date_revoked')->nullable();
            $table->longtext('property_details')->nullable();
            $table->string('further_details')->nullable();
            $table->boolean('property_details_display')->nullable();
            $table->integer('owner')->unsigned()->nullable()->index();
            $table->boolean('is_complete')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->boolean('is_sold')->nullable();
            $table->boolean('is_let')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
