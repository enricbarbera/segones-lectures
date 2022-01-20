<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Autor;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $autor1 = new Autor();
        // $autor1->name='pep';
        // $autor1 -> save();
        // \App\Models\User::factory(10)->create();
        $this -> call(AutorSeeder::class);
        $this -> call(TitolSeeder::class);
        User::factory(1)->create();
        
    }
}
