<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('healthplan_patient', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->integer('healthplan_id');
            $table->integer('contract_number');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
};
