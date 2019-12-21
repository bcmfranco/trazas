<?php

use Illuminate\Database\Seeder;

class Seeder19 extends Seeder
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
            "id"=>"19",
            "titulo"=>"El árbol de sal",
            "cuerpo"=>"Los mocovíes, indígenas del norte argentino, conocen un helecho llamado Iobec Mapic, al que muchos confunden con un árbol, por que tiene un gran porte y puede llegar a los 2 metros de altura.
            
            Dice la leyenda que cuando Cotaá (Dios) creó el mundo hizo esta planta para que alimentara al hombre; la planta se expandió rápidamente y fue de gran utilidad para la humanidad que la consumía agradecidamente.
            
            Neepec (el diablo), sintió envidia de ver lo útil que era esta planta y se propuso destruirlas a todas, de la forma en que fuese necesario y posible.
            
            Se elevó por los aires y fue a las salinas más cercanas, llenó un gran cántaro con agua salada y los arrojó sobre las matas con la intención de quemarlas con el salitre.
            
            Fue entonces que las raíces absorbieron el agua; la sal se mezcló con la savia y las hojas tomaron el mismo gusto.
            
            Cotaá triunfó una vez más porque la planta no perdió su utilidad, ya que con ella sazonan las carnes de los animales salvajes y otros alimentos...",
            "usuario"=>"silvio",
            ]
            );
            
    }
}
