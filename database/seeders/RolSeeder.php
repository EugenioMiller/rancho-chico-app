<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $r1 = new Rol();
        $r1->name = 'Super admin';
        $r1->save();

        $r2 = new Rol();
        $r2->name = 'Admin';
        $r2->save();

        $r3 = new Rol();
        $r3->name = 'Cocinero';
        $r3->save();

        $r4 = new Rol();
        $r4->name = 'Mozo';
        $r4->save();
    }
}
