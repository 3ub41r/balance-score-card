<?php

use App\Models\Staff;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStaffColumnsInDivisions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->foreignId('pic_staff_id')->constrained('staff')->cascadeOnDelete();
            $table->foreignId('approver_staff_id')->constrained('staff')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->dropForeign(['pic_staff_id']);
            $table->dropForeign(['approver_staff_id']);
            $table->dropColumn('pic_staff_id', 'approver_staff_id');
        });
    }
}
