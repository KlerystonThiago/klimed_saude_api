<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Healthplan;

class HealthPlanTableSeeder extends Seeder
{
    public function run()
    {
        Healthplan::create([
            'description' => 'SulAmérica',
            'phone' => '(81) 9 9875-5475'
        ]);

        Healthplan::create([
            'description' => 'Amil',
            'phone' => '(81) 9 9785-9788'
        ]);

        Healthplan::create([
            'description' => 'Unimed',
            'phone' => '(81) 9 9456-7654'
        ]);

        Healthplan::create([
            'description' => 'Hapvida',
            'phone' => '(81) 9 7589-9857'
        ]);

        Healthplan::create([
            'description' => 'Bradesco',
            'phone' => '(81) 9 8967-6677'
        ]);
    }
}
