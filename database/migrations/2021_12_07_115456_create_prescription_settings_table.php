<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('doctro_id');
            $table->char('name');
            $table->char('phone');
            $table->text('description');
            $table->text('logo');
            $table->text('seal');
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
        Schema::dropIfExists('prescription_settings');
    }
}
