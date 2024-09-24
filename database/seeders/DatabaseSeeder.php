<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * En este método llamo a todos
     * los seeders que quiero invocar
     */
    public function run(): void {

        //Invoco los seeders en el arreglo
        $this->call([
            RolSeeder::class,
            UserSeeder:: class,
        ]);
    }
}
