<?php

use Illuminate\Database\Seeder;

class Seeder10 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->insert(
            [
            "id"=>"10",
            "titulo"=>"Las cadenas",
            "cuerpo"=>"Rompió todas las cadenas para ahora sí poder atarse bien a las cosas.",
            "usuario"=>"ivan",
            ]
            );
            
    }
}
