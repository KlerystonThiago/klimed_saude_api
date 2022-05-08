<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSpecialtyTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('doctor_specialty')->insert([
            'doctor_id' => 1,
            'specialty_id' => 5
        ]);

        DB::table('doctor_specialty')->insert([
            'doctor_id' => 2,
            'specialty_id' => 4
        ]);

        DB::table('doctor_specialty')->insert([
            'doctor_id' => 3,
            'specialty_id' => 3
        ]);

        DB::table('doctor_specialty')->insert([
            'doctor_id' => 4,
            'specialty_id' => 2
        ]);

        DB::table('doctor_specialty')->insert([
            'doctor_id' => 5,
            'specialty_id' => 1
        ]);
    }
}
