<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class healthplan_patientTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('healthplan_patient')->insert([
            'patient_id' => 1,
            'healthplan_id' => 5,
            'contract_number' => rand(10000, 99999),
        ]);

        DB::table('healthplan_patient')->insert([
            'patient_id' => 2,
            'healthplan_id' => 4,
            'contract_number' => rand(10000, 99999),
        ]);

        DB::table('healthplan_patient')->insert([
            'patient_id' => 3,
            'healthplan_id' => 3,
            'contract_number' => rand(10000, 99999),
        ]);

        DB::table('healthplan_patient')->insert([
            'patient_id' => 4,
            'healthplan_id' => 2,
            'contract_number' => rand(10000, 99999),
        ]);

        DB::table('healthplan_patient')->insert([
            'patient_id' => 5,
            'healthplan_id' => 1,
            'contract_number' => rand(10000, 99999),
        ]);
    }
}
