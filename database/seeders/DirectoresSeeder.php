<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Directores;

class DirectoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Director = new Directores();
        $Director->name = "Martin Scorsese";
        $Director->save();

        $Director1 = new Directores();
        $Director1->name = "Agnès Varda";
        $Director1->save();

        $Director2 = new Directores();
        $Director2->name = "Stanley Kubrick";
        $Director2->save();

        $Director3 = new Directores();
        $Director3->name = "David Fincher";
        $Director3->save();

        $Director4 = new Directores();
        $Director4->name = "Akira Kurosawa";
        $Director4->save();

        $Director5 = new Directores();
        $Director5->name = "David Lynch";
        $Director5->save();
    }
}
