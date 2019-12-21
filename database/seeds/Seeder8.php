<?php

use Illuminate\Database\Seeder;

class Seeder8 extends Seeder
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
            "id"=>"8",
            "titulo"=>"Cachirú",
            "cuerpo"=>"Este mito sin la difusión de otros como la mulánima o el duende es descrito por Adolfo Colombres en su Seres sobrenaturales de la Cultura Popular Argentina. También se lo llama Cachurú.
            Es representado como  una gran lechuza, de color gris oscuro y de poderosas garras, tiene ojos luminosos que denuncian su vuelo nocturno y silencioso. Eventualmente se oyen sus fuertes graznidos.
            Ataca a las personas, elevándolas con sus poderosas garras y destrozándolo, le come el alma para convertirlo en un fantasma. Muy rara vez se lo oye o ve en campo abierto, su zona preferida son los tupidos montes, en donde es casi imposible el acceso.
            Se tienen referencias de sus apariciones en Mailín, Santiago del Estero.",
            "usuario"=>"yatel",
            ]
            );
            
    }
}
