<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentsTableSeeder extends Seeder
{
    public function run()
    {
        Appointment::create([
            'patient_id' => 1,
            'doctor_id' => 1,
            'procedure_id' => 5,
            'date' => '2022-05-04',
            'hour' => '13:00:00',
            'private' => 1
        ]);

        Appointment::create([
            'patient_id' => 2,
            'doctor_id' => 2,
            'procedure_id' => 4,
            'date' => '2022-05-14',
            'hour' => '15:00:00',
            'private' => 1
        ]);

        Appointment::create([
            'patient_id' => 3,
            'doctor_id' => 3,
            'procedure_id' => 3,
            'date' => '2022-05-24',
            'hour' => '16:00:00',
            'private' => 1
        ]);

        Appointment::create([
            'patient_id' => 4,
            'doctor_id' => 4,
            'procedure_id' => 2,
            'date' => '2022-05-01',
            'hour' => '17:00:00',
            'private' => 1
        ]);

        Appointment::create([
            'patient_id' => 5,
            'doctor_id' => 5,
            'procedure_id' => 1,
            'date' => '2022-05-10',
            'hour' => '18:00:00',
            'private' => 1
        ]);
    }
}
