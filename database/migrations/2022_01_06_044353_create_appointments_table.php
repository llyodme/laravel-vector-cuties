<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->integer('app_id', true);
            $table->string('app_name', 100);
            $table->dateTime('app_date', 6);
            $table->text('app_address');
            $table->string('app_contact', 15);
            $table->string('app_email');
            $table->string('app_status', 20);
            $table->text('app_services');
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
        Schema::dropIfExists('appointments');
    }
}
