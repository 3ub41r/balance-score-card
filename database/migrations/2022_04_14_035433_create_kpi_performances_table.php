<?php

use App\Models\Division;
use App\Models\Kpi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpiPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpi_performances', function (Blueprint $table) {
            $table->id();
            $table->integer('quarter');
            $table->decimal('achievement', 10, 2);
            $table->foreignIdFor(Kpi::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Division::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('kpi_performances');
    }
}
