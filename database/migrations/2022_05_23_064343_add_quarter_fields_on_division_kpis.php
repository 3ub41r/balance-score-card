<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuarterFieldsOnDivisionKpis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('division_kpis', function (Blueprint $table) {
            $table->boolean('q1')->default(true);
            $table->boolean('q2')->default(true);
            $table->boolean('q3')->default(true);
            $table->boolean('q4')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('division_kpis', function (Blueprint $table) {
            $table->dropColumn([
                'q1',
                'q2',
                'q3',
                'q4',
            ]);
        });
    }
}
