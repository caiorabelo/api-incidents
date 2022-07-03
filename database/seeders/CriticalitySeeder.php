<?php

namespace Database\Seeders;

use App\Models\Criticality;
use Illuminate\Database\Seeder;

class CriticalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criticality::create([
            'name' => 'Alta',
        ]);

        Criticality::create([
            'name' => 'Média',
        ]);

        Criticality::create([
            'name' => 'Baixa',
        ]);
    }
}
