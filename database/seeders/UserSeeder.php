<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $user = new User();
        $user->name = "Rosa Blanca";
        $user->lastname = "Edén";
        $user->email = "rosablancaeden@gmail.com";
        $user->password = bcrypt('LoDeRosita71');
        $user->fk_rol = 1;
        $user->save();

    }
}
