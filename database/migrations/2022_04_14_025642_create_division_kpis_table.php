<?php

use App\Models\Division;
use App\Models\Kpi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_kpis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Division::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Kpi::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('division_kpis');
    }
}
