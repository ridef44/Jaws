<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Project::create([

        'name'=> 'RRHH',
        'description'=>'Gestion de personal'
       ]);

         Project::create([

        'name'=> 'IT',
        'description'=>'Tecnologias de informacion'
       ]);




    }
}
