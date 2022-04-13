<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersepectiveCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perspective_categories')->insert([
            [
                'id' => 1,
                'name' => 'FINANCIAL PERSPECTIVE',
                'code' => 'F',
            ],
            [
                'id' => 2,
                'name' => 'STAKEHOLDER PERSPECTIVE',
                'code' => 'S',
            ],
            [
                'id' => 3,
                'name' => 'INTERNAL PROCESS PERSPECTIVE',
                'code' => 'P',
            ],
            [
                'id' => 4,
                'name' => 'LEARNING AND GROWTH PERSPECTIVE',
                'code' => 'L',
            ],
        ]);
    }
}
