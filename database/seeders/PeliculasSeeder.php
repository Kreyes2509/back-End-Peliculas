<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\peliculas;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelicula = new peliculas();
        $pelicula->title = "John Wick";
        $pelicula->DirectorID = 1;
        $pelicula->CategoryID = 1;
        $pelicula->Duration = "2:00h";
        $pelicula->Synopsis = "John Wick es una franquicia estadounidense de suspenso y acción neo-noir creada por Derek Kolstad y producidas por Lionsgate a través de Summit Entertainment.";
        $pelicula->save();

        $pelicula = new peliculas();
        $pelicula->title = "John Wick 2";
        $pelicula->DirectorID = 2;
        $pelicula->CategoryID = 2;
        $pelicula->Duration = "2:20h";
        $pelicula->Synopsis = "John Wick es una franquicia estadounidense de suspenso y acción neo-noir creada por Derek Kolstad y producidas por Lionsgate a través de Summit Entertainment.";
        $pelicula->save();

        $pelicula = new peliculas();
        $pelicula->title = "John Wick 3";
        $pelicula->DirectorID = 3;
        $pelicula->CategoryID = 3;
        $pelicula->Duration = "2:40h";
        $pelicula->Synopsis = "John Wick es una franquicia estadounidense de suspenso y acción neo-noir creada por Derek Kolstad y producidas por Lionsgate a través de Summit Entertainment.";
        $pelicula->save();

        $pelicula = new peliculas();
        $pelicula->title = "John Wick 4";
        $pelicula->DirectorID = 4;
        $pelicula->CategoryID = 4;
        $pelicula->Duration = "2:50h";
        $pelicula->Synopsis = "John Wick es una franquicia estadounidense de suspenso y acción neo-noir creada por Derek Kolstad y producidas por Lionsgate a través de Summit Entertainment.";
        $pelicula->save();

        $pelicula = new peliculas();
        $pelicula->title = "five nights at freddy's pelicula";
        $pelicula->DirectorID = 5;
        $pelicula->CategoryID = 5;
        $pelicula->Duration = "2:50h";
        $pelicula->Synopsis = "Un problemático guardia de seguridad empieza a trabajar en la pizzería Freddy Fazbear's. Mientras pasa su primera noche en el trabajo, se da cuenta de que el turno de noche en Freddy's no será tan fácil de sobrellevar.";
        $pelicula->save();

        $pelicula = new peliculas();
        $pelicula->title = "oppenheimer";
        $pelicula->DirectorID = 6;
        $pelicula->CategoryID = 6;
        $pelicula->Duration = "2:10h";
        $pelicula->Synopsis = "Durante la Segunda Guerra Mundial, el teniente general Leslie Groves designa al físico J. Robert Oppenheimer para un grupo de trabajo que está desarrollando el Proyecto Manhattan, cuyo objetivo consiste en fabricar la primera bomba atómica.";
        $pelicula->save();
    }
}
