<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        Patient::create([
            'name' => 'Antônio Neto',
            'birthDate' => '1990-05-10',
            'phone' => '(81) 9 9400-3340'
        ]);

        Patient::create([
            'name' => 'Dyego Barbosa',
            'birthDate' => '1989-05-30',
            'phone' => '(81) 9 9400-3340'
        ]);

        Patient::create([
            'name' => 'Glaucyo Gomes',
            'birthDate' => '1995-05-20',
            'phone' => '(81) 9 9400-3340'
        ]);

        Patient::create([
            'name' => 'Wilk Caetano',
            'birthDate' => '1990-05-12',
            'phone' => '(81) 9 9400-3340'
        ]);

        Patient::create([
            'name' => 'José Lucas',
            'birthDate' => '2000-05-08',
            'phone' => '(81) 9 9400-3340'
        ]);
    }
}
