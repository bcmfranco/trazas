<?php

use Illuminate\Database\Seeder;

class Seeder4 extends Seeder
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
            "id"=>"4",
            "titulo"=>"Curva acentuada.",
            "cuerpo"=>"Cuando tenía unos diez u once años me dirigía a la playa con mi tía y algunos amigos. Estábamos divididos en dos automóviles. Para llegar a la playa era obligatorio pasar por un área industrial bastante grande. No conocíamos el camino, por lo que seguimos a otro auto. En un momento del viaje, el auto que seguíamos giró sin avisar y el conductor de nuestro auto tuvo que hacer una curva bastante acentuada.
            En ese preciso momento todos escuchamos una voz alta y clara dentro del automóvil diciendo “curva acentuada, ¿verdad?” y riéndose. El conductor pisó el freno inmediatamente. Nos miramos unos a otros, sin comprender lo que había pasado. Aquella voz no pertenecía a ninguna de las personas dentro del auto.
            Justo después nos dimos cuenta que el otro carro también se había detenido. El conductor del otro vehículo se bajó con una expresión de terror en el rostro y gritó “¿Ustedes también lo escucharon?”. Habían escuchado exactamente lo mismo dentro del otro automóvil. La zona estaba totalmente desierta. Ninguno de los carros llevaba el radio encendido.",
            "usuario"=>"daniel",
            ]
            );
            
    }
}
