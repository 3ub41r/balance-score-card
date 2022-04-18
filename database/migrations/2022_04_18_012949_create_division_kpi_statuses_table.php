<?php

use App\Models\Division;
use App\Models\DivisionKpiStatus;
use App\Models\KpiStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionKpiStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_kpi_statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('quarter');
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
        Schema::dropIfExists('division_kpi_statuses');
    }
}
