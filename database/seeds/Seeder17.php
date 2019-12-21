<?php

use Illuminate\Database\Seeder;

class Seeder17 extends Seeder
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
            "id"=>"17",
            "titulo"=>"Amovindo",
            "cuerpo"=>"Nos cuenta Félix Coluccio que este personaje de las costas del río Salado, en Santiago del Estero, debió vivir alrededor de 1785.
            
            Este shalaco tenía campos y gran fortuna, con tesoros guardados en tinajones y ataúdes, los cuales, enterrados, ocultaban oro, plata y demás bienes de valor incalculables. Se cuenta que lo visitaba un ser que vivía en la selva con varias formas, a veces como hombre, otras como toro con crines brillosas y astas doradas, y que se paseaba por todo el pago que formaban parte de Bandera Vieja, balando de una forma muy particular.
            
            Cuando muere Amovindo, el millonario estanciero, el toro llegó y reuniendo en un santiamén los animales del lugar, se alejó llevándoselos hacia el monte.",
            "usuario"=>"patricio",
            ]
            );
            
    }
}
