<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpiSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpi_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('year_implemented');
            $table->integer('quarter');
            $table->date('key_in_starts_on');
            $table->date('key_in_ends_on');
            $table->date('approval_starts_on');
            $table->date('approval_ends_on');
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
        Schema::dropIfExists('kpi_schedules');
    }
}
