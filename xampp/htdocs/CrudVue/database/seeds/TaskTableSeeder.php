<?php

use Illuminate\Database\Seeder;
use App/Taks;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crear factory
        factory(Taks::class,5)->create;
    }
}
