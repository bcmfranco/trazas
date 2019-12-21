<?php

use Illuminate\Database\Seeder;

class Seeder13 extends Seeder
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
            "id"=>"13",
            "titulo"=>"Los Piojos de Lady Diana Spencer",
            "cuerpo"=>"Durante uno de sus viajes a África la Princesa de Gales, Lady Diana Spencer, vio a un niño que parecía muy triste. Se acercó a él y mientras le acariciaba la cabeza le dijo:
            
            – ¿Por qué no has ido hoy a la escuela, pequeñín?
            
            – Es que me han echado del colegio.
            
            – ¿Y por qué te han echado del colegio?
            
            – Porque tengo la cabeza llena de piojos…",
            "usuario"=>"leonardo",
            ]
            );
            
    }
}
