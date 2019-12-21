<?php

use Illuminate\Database\Seeder;

class Seeder18 extends Seeder
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
            "id"=>"18",
            "titulo"=>"Anta",
            "cuerpo"=>"Este magnífico animal (tapirus terestris), llamado Tapir o Gran Bestia, habita en laAnta zona del litoral argentino y de los grandes ríos. Según relata J.B.Ambrosetti, este animal se alimenta solamente de ramas y frutas porque cuando el Creador le dio vida a los animales, les preguntó que les gustaría comer. El Anta, por tener sus orejas muy pequeñas, no oyó; y fue presuroso a preguntarle a Kadjurukré que debía comer, entonces este le dijo, de mala gana:  vayan a comer hojas y ramas de los árboles .
                    Nos dice Félix Coluccio, que en la zona de Misiones, la gente afirma que las correas hechas con el cuero de este animal, transmiten su extraordinaria fuerza al que lo posee, además se usa su pezuña triturada o pulverizada para los males del corazón y para detener las hemorragias del parto.",
            "usuario"=>"rosana",
            ]
            );
            
    }
}
