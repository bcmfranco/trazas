<?php

use Illuminate\Database\Seeder;

class Seeder6 extends Seeder
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
            "id"=>"6",
            "titulo"=>"Sin moretones ni heridas.",
            "cuerpo"=>"Hacía payasadas en el barandal de mi balcón en un cuarto piso cuando caí mientras mis amigos veían la escena aterrorizados. Recuerdo perfectamente ver el suelo de concreto aproximándose a mi rostro y pensar “Vaya mierda, me voy a romper la mano” (no tengo idea de porqué pensé precisamente en mis manos cuando tenía problemas más serios).
            Lo siguiente que recuerdo es a mis amigos gritando desde arriba “¿ESTÁS BIEN?”. Miré hacia arriba y les pregunté “¿Qué pasó?”.
            Ellos no me habían visto golpear contra el suelo, corrieron hasta el barandal y me encontraron de pie, viendo hacia arriba, confundido. No tuve ninguna herida ni moretón. El recuerdo del golpe contra el suelo no existe. Esos dos segundos no existen más en mis recuerdos.
            Ninguno de los tres entiende lo que sucedió; sin embargo, vimos la escena y concordamos en que realmente sucedió.",
            "usuario"=>"franco",
            ]
            );
            
    }
}
