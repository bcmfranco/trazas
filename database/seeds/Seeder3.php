<?php

use Illuminate\Database\Seeder;

class Seeder3 extends Seeder
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
            "id"=>"3",
            "titulo"=>"Un camino distinto.",
            "cuerpo"=>"Terminé deteniéndome en un callejón que nunca había visto antes. Recuerdo que avancé otros cinco metros hasta que la “falla” se produjo. Todo en mi mente explotó. Sentí como si mi cuerpo ya no existiera, como si fuera un ser semiconsciente flotando a través de una dimensión muy rara. De repente, entre tantas formas y colores, tuve una visión. Se trataba de varias personas desconocidas que, en mi mente, parecían empresarios vestidos con traje. Parecían temerosos y llenos de un pánico que podía ver. Una de estas “personas” hizo un movimiento brusco y todo se volvió negro.
            Cuando regresé a mi estado normal, me encontraba en una calle completamente distinta. Era la calle por la que siempre pasaba rumbo al trabajo. Me sentí enfermo, perturbado y depresivo.
            Nunca use ningún tipo de droga ni medicamento pesado, nunca sufrí de alucinaciones y previo a esto nada de la misma naturaleza me había sucedido. Lo más extraño fue que cuando la falla estaba sucediendo, yo podía ver a aquellas personas observándome como a un animal en una jaula, sentía que me estaban controlando. Hasta el día de hoy aquel episodio me sigue perturbando.",
            "usuario"=>"celso",
            ]
            );
            
    }
}
