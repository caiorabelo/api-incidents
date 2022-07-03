<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Alarme',
        ]);

        Type::create([
            'name' => 'Incidente',
        ]);

        Type::create([
            'name' => 'Outros',
        ]);
    }
}
