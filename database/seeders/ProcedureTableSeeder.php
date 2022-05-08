<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Procedure;

class ProcedureTableSeeder extends Seeder
{
    public function run()
    {
        Procedure::create([
            'name' => 'RM de Tórax',
            'price' => 1368.78
        ]);

        Procedure::create([
            'name' => 'Cirurgia Venosa',
            'price' => 10880.99
        ]);

        Procedure::create([
            'name' => 'Extração de Corpo Estranho',
            'price' => 950.25
        ]);

        Procedure::create([
            'name' => 'Tenotomia',
            'price' => 3450.38
        ]);

        Procedure::create([
            'name' => 'Neorocirurgia Funcional e Estereotáxica',
            'price' => 1280.55
        ]);
    }
}
