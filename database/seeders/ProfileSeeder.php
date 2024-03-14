<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'name' => 'Azrul Azwan Abdul Rahman',
            'category' => 1,
            'grade' => 0,
            'image' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('profiles')->insert([
            'name' => 'Ahmad Faizul Bin Ahmad',
            'category' => 1,
            'grade' => 0,
            'image' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('profiles')->insert([
            'name' => 'Sahar Bin Salehan',
            'category' => 1,
            'grade' => 0,
            'image' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
