<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Titol;

class TitolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Titol::factory(50)->create();
    }
}
