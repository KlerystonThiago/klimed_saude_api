<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        Doctor::create([
            'name' => 'Augusto Sierra',
            'crm' => 'CRM-PE 259784',
        ]);

        Doctor::create([
            'name' => 'Ricardo Medeiros',
            'crm' => 'CRM-PE 845297',
        ]);

        Doctor::create([
            'name' => 'Mário Fonseca',
            'crm' => 'CRM-PE 623574',
        ]);

        Doctor::create([
            'name' => 'Karla Souza',
            'crm' => 'CRM-PE 589678',
        ]);

        Doctor::create([
            'name' => 'Regina Mendonsa',
            'crm' => 'CRM-PE 623574',
        ]);
    }
}
