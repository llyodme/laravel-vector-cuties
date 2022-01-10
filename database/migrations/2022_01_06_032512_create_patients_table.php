<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->text('pat_fname');
            $table->text('pat_mname');
            $table->text('pat_lname');
            $table->text('pat_gender');
            $table->string('pat_address');
            $table->date('pat_birth');
            $table->text('pat_description');
            $table->integer('pat_id', true);
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
        Schema::dropIfExists('patients');
    }
}
