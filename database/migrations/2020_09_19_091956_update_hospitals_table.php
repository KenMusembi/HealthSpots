<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hospitals', function (Blueprint $table) {
            //


            $table->biginteger('hospital_services_id')->unsigned();
            $table->foreign('hospital_services_id')->references('id')->on('hospital_services');
            $table->biginteger('hospital_payments_id')->unsigned();
            $table->foreign('hospital_payments_id')->references('id')->on('hospital_payments');
            $table->biginteger('hospital_insurance_id')->unsigned();
            $table->foreign('hospital_insurance_id')->references('id')->on('hospital_insurance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hospitals', function (Blueprint $table) {
            //
        });
    }
}
