<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specialty;

class SpecialtysTableSeeder extends Seeder
{
    public function run()
    {
        Specialty::create([
            'name' => 'Dermatologia',
        ]);

        Specialty::create([
            'name' => 'Cardiologia',
        ]);

        Specialty::create([
            'name' => 'Cirurgia plástica',
        ]);

        Specialty::create([
            'name' => 'Homeopatia',
        ]);

        Specialty::create([
            'name' => 'Clínica médica',
        ]);
    }
}
