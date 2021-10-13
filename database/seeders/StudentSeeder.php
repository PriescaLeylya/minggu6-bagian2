<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710176',
            'name' => 'PRIESCA LEYLYA SYAFITRI',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '081803201717',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710062',
            'name' => 'RACHMA NOVITA ANGGREANI',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '085706469814',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710081',
            'name' => 'RAFIKA NURHAYATI',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '081998440034',
        ]);
    }
}
