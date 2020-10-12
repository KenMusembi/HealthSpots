<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Name');
            $table->string('Officialname');
            $table->string('Registration_number');
            $table->string('Keph_level');
            $table->string('Facility_type');
            $table->string('Facility_type_category');
            $table->string('Owner');
            $table->string('Owner_type');
            $table->string('Regulatory_body');
            $table->string('Beds');
            $table->string('Cots');
            $table->string('County');
            $table->string('Constituency');
            $table->string('Sub_county');
            $table->string('Ward');
            $table->string('Operation_status');
            $table->string('Open_whole_day');
            $table->string('Open_public_holidays');
            $table->string('Open_weekends');
            $table->string('Open_late_night');
            $table->string('Service_names');
            $table->string('Approved');
            $table->string('Public_visible');
            $table->string('Closed');
            $table->decimal('hospital_long', 11, 8);
            $table->decimal('hospital_lat', 10, 8);
            $table->string('hospital_phone_number');
            $table->string('hospital_email');            
        });
    }

    /**
     * Reverse the migrations.
     *45p
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
