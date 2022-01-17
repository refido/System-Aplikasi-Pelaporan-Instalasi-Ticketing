<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallationSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installation_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->bigInteger('number_of_technicians');
            $table->bigInteger('instance_id');
            $table->bigInteger('technician_id');
            $table->date('date_instalation');
            $table->integer('status');
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
        Schema::dropIfExists('installation_schedules');
    }
}
