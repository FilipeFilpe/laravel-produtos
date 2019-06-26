<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(CategoriaTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder
{
    public function run()
    {
        Categoria::create([ 'name' => 'ELETRODOMÉSTICO' ]);
        Categoria::create([ 'name' => 'ELETRÔNICA' ]);
        Categoria::create([ 'name' => 'INFORMÁTICA' ]);
        Categoria::create([ 'name' => 'BRINQUEDOS' ]);
        Categoria::create([ 'name' => 'JARDINAJEM' ]);
        Categoria::create([ 'name' => 'SMARTPHONE' ]);
    }
}