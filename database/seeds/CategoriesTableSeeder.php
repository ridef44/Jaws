<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Contrataciones',
            'project_id' => 1
        ]);
        Category::create([
            'name' => 'Capacitacion',
            'project_id' => 1
        ]);

        Category::create([
            'name' => 'Analisis',
            'project_id' => 2
        ]);
        Category::create([
            'name' => 'Infraestructura',
            'project_id' => 2
        ]);
    }
}