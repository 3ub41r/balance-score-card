<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KpiStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('kpi_statuses')->truncate();
        
        DB::table('kpi_statuses')->insert([
            [
                'id' => 1,
                'name' => 'Submitted',
                'slug' => 'submitted',
            ],
            [
                'id' => 2,
                'name' => 'Reviewed',
                'slug' => 'reviewed',
            ],
            [
                'id' => 3,
                'name' => 'Approved',
                'slug' => 'approved',
            ],
            [
                'id' => 4,
                'name' => 'Rejected',
                'slug' => 'rejected',
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
