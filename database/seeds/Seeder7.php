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
            "id"=>"7",
            "titulo"=>"Mis ojos queman.",
            "cuerpo"=>"Hace aproximadamente 15 años, unos amigos de mis padres, llamados Steve y Julie, fueron despertados por un fuerte estruendo que sacudió su casa. Preocupado por que alguno de sus hijos se hubiera caído de la litera mientras dormía, Steve corrió por las escaleras y se encontró con sus tres hijos durmiendo plácidamente en sus camas. Julie le pidió a Steve que revisara para confirmar que no hubiera ningún intruso dentro de la casa y el hombre revisó todas las puertas y ventanas antes de salir al jardín.
            Tras diez minutos investigando lo que podría haber causado aquel ruido y no haber encontrado nada fuera de lugar, volvió a casa y se fue a la cama. Encontró a su esposa muy preocupada, incluso un poco descontrolada, preguntándole que dónde se había metido y qué había pasado. Confundido y cansado, Steve le dijo que no había encontrado nada e intentó calmarla, hasta que ella apuntó al reloj y le dijo que eran las cuatro de la mañana, que se había ido durante más de tres horas. Julie incluso había salido de la casa, gritado su nombre y no lo encontró por ningún lado. Sin lograr entender lo que había pasado, los dos regresaron a dormir hasta que Steve tuvo que levantarse para ir al trabajo.
            Steve trabajaba pintando casas y después de algunas horas en el trabajo notó que sus ojos le daban comezón, después comenzaron a arder, y tras algunas horas le quemaban tanto que tenía que sostener sus párpados, pues cada vez que los cerraba sentía como si fueran lijas raspando contra el globo ocular. Sus compañeros de trabajo lo llevaron al hospital y allí le diagnosticaron quemaduras de segundo grado en los ojos. Los médicos le dijeron que sus quemaduras eran equivalentes a mirar fijamente una máquina de soldar en funcionamiento durante horas sin ningún tipo de protección. Le trataron los ojos y tuvo suerte de recuperar la vista en su totalidad.",
            "usuario"=>"gary",
            ]
            );
            
    }
}
