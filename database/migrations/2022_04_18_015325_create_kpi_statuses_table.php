<?php

use App\Models\Division;
use App\Models\KpiStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpiStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpi_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
        });

        Schema::table('division_kpi_statuses', function (Blueprint $table) {
            $table->foreignIdFor(Division::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(KpiStatus::class)
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kpi_statuses');
    }
}
