<?php

use Illuminate\Database\Seeder;

class Seeder12 extends Seeder
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
            "id"=>"12",
            "titulo"=>"Argumentos que convencen",
            "cuerpo"=>"Dos moros se encuentran por las ramblas de Barcelona, y uno le dice al otro:
            
            – ¿Cuánto dinero te has sacado hoy?
            
            El otro responde: – 4 euros
            
            – ¿Y que tenias escrito en el cartel?,
            
            El hombre lo piensa un poco y dice:- Pues lo típico, «tengo mujer y dos hijos».
            
            ¿Y tu, cuanto te has sacado hoy?
            
            Sin dudarlo, suelta: – 250 Euros
            
            Después de-sobreponerse le pregunta ¿qué tenias escrito en el cartel?
            
            – «Me faltan 10 Euros para volverme a Marruecos».",
            "usuario"=>"karen",
            ]
            );
            
    }
}
