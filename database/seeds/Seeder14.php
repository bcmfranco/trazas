<?php

use Illuminate\Database\Seeder;

class Seeder14 extends Seeder
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
            "id"=>"14",
            "titulo"=>"Niño explota la inocencia de su padre",
            "cuerpo"=>"Cuando no actuamos como debemos y esto se hace público, somos víctimas de nuestro mal ejemplo…
            
            El liderazgo debe ser intachable. Tanto en la esfera social como en la vida privada. La disociación o doble vida, es un fenómeno extendido pero doloroso, ya que lleva a una corrupción interna.
            
            Aquella mañana salí de la casa con destino al colegio. Sin embargo, en el camino al encontrarme con un amigo nos fuimos al cine en lugar de ir a estudiar. Ya en el cine, al sentarnos detrás de un señor bien acompañado, nos dimos cuenta de que el señor era mi padre. Luego, como mi padre estaba de brazos con la desconocida, cuando se dio cuenta de mi presencia se hizo al desentendido.
            
            Ya en la casa cuando quería regañarme por lo del colegio, lo hizo dándome una propina de 5 dólares para que no faltara a clases más en lo sucesivo y sus llamadas de atención en lo posterior fueron el negocio de mi adolescencia.",
            "usuario"=>"marcela",
            ]
            );
            
    }
}
