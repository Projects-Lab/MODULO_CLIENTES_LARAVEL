<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder{

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Cliente::factory(10)->create();
    }
}
