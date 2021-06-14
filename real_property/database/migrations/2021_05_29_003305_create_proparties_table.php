<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proparties', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->enum('catagery', ['for sale','for let','shared accommodation'])->nullable();
            $table->integer('type')->unsigned()->nullable()->index();
            $table->enum('age', ['Mid 90','Mid 40','New','Newly build'])->nullable();
            $table->enum('minimum_term', ['1 month','3 month','1 year','2-5 year','long-term'])->nullable();
            $table->integer('door_no')->nullable();
            $table->string('door_name')->nullable();
            $table->string('first_pastcode', 5)->nullable();
            $table->string('second_pastcode', 5)->nullable();
            $table->string('post_town')->nullable();
            $table->string('post_city')->nullable();
            $table->string('post_country')->nullable();
            $table->string('display_address')->nullable();
            $table->enum('condition_of_property', ['Require Painting','Fully Decorated'])->nullable();
            $table->string('furnished_property')->nullable();
            $table->string('accessability')->nullable();
            $table->string('heating_type')->nullable();
            $table->boolean('is_burglar_alarm')->nullable();
            $table->boolean('is_cctv')->nullable();
            $table->enum('bill', ['Included','Excluded','Shared'])->nullable();
            $table->string('enquiry_contact')->nullable();
            $table->string('enquiry_email')->nullable();
            $table->string('sale_condition')->nullable();
            $table->string('rent_condition')->nullable();
            $table->integer('no_of_bedrooms')->nullable();
            $table->integer('no_of_bathrooms')->nullable();
            $table->integer('no_of_halls')->nullable();
            $table->integer('no_of_reseptions')->nullable();
            $table->integer('floors')->nullable();
            $table->string('parking')->nullable();
            $table->string('garden')->nullable();
            $table->string('internal_area')->nullable();
            $table->string('land_area')->nullable();
            $table->string('area_unit')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('price_flag')->nullable();
            $table->enum('rent_frequency', ['Monthly','Quarter','Half','Annual'])->nullable();
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
            $table->boolean('is_publish')->nullable();
            //$table->string('owner')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proparties');
    }
}
