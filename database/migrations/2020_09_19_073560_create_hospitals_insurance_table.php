<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsInsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_insurance', function (Blueprint $table) {
            //
            $table->id();
            $table->timestamps();
            $table->string('status');

            $table->biginteger('hospital_id')->unsigned();
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->biginteger('insurance_id')->unsigned();
            $table->foreign('insurance_id')->references('id')->on('insurance_companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hospital_insurance', function (Blueprint $table) {
            //
        });
    }
}
