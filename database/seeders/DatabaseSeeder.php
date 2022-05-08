<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(SpecialtysTableSeeder::class);
        $this->call(DoctorSpecialtyTableSeeder::class);
        $this->call(ProcedureTableSeeder::class);
        $this->call(HealthPlanTableSeeder::class);
        $this->call(healthplan_patientTableSeeder::class);
    }
}
