<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Categorias();
        $category->name = "Aventuras";
        $category->save();

        $category1 = new Categorias();
        $category1->name = "Ciencia Ficción";
        $category1->save();

        $category2 = new Categorias();
        $category2->name = "Comedia";
        $category2->save();

        $category3 = new Categorias();
        $category3->name = "documental";
        $category3->save();

        $category4 = new Categorias();
        $category4->name = "Drama";
        $category4->save();

        $category5 = new Categorias();
        $category5->name = "Fantasía";
        $category5->save();

        $category6 = new Categorias();
        $category6->name = "Musical";
        $category6->save();

        $category7 = new Categorias();
        $category7->name = "Terror";
        $category7->save();


    }
}
