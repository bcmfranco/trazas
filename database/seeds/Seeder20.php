<?php

use Illuminate\Database\Seeder;

class Seeder20 extends Seeder
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
            "id"=>"20",
            "titulo"=>"Atajacaminos",
            "cuerpo"=>"Esta extraña ave, de hábitos nocturnos y de canto muy monótono, hacia la hora del crepúsculo se sitúa en los caminos para salirle de repente a los transeúntes.El Yanarca
            
            Cuenta Félix Coluccio que en algunas regiones traducen el canto del atajacaminos como  chorizo gordo  o  clarito había sido , en alusión a la añapa de algarrobo que gusta y que no es suficientemente espeso como a él le gusta.
            
            Nos dice también que sobre los huevos de este animal existe la creencia de que al que los saca de su nido les produce un adormecimiento casi cataléptico.
            
            En otros lados se cuenta que el atajacaminos era un gaucho bandido, que asaltaba caminos y que fue condenado a vivir así, a la vera del camino y perpetuo sobresalto.",
            "usuario"=>"tatiana",
            ]
            );
            
    }
}
