<?php

use Illuminate\Database\Seeder;

class Seeder9 extends Seeder
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
            "id"=>"9",
            "titulo"=>"Naufragio Psicológico",
            "cuerpo"=>"En el verano de 1874 me encontraba en Liverpool, donde había ido en viaje de negocios representando a la sociedad mercantil Bronson & Jarret de Nueva York. Mi nombre es William Jarret, y el de mi socio era Zenas Bronson. La compañía quebró el año pasado y Bronson, incapaz de soportar el salto de la opulencia a la pobreza, murió. Una vez concluidos mis asuntos financieros y viendo cercana una crisis de agotamiento y desaliento, decidí que una larga travesía marítima podría resultar al mismo tiempo agradable y beneficiosa para mí; por ello, en vez de embarcarme a la vuelta en uno de aquellos excelentes buques de pasajeros, hice una reserva para Nueva York en el velero Morrow, donde había hecho cargar una abundante y valiosa remesa de los artículos que había comprado. El Morrow era un barco inglés dotado con pocos camarotes para pasajeros, entre los que sólo nos contábamos yo y una joven con su doncella, una mujer negra de mediana edad. Me pareció extraño que una joven inglesa viajara tan bien atendida, pero ella me explicó más tarde que la doncella había estado al servicio de un matrimonio de Carolina del Sur, y que fue recogida por su familia al morir ambos cónyuges el mismo día en casa de su padre, en Devonshire. Dicha circunstancia, por su rareza, permanecería en mi memoria con bastante claridad, incluso aunque no hubiera salido a relucir en una posterior conversación con la joven dama que el marido se llamaba William Jarret, igual que yo. Sabía que una rama de mi familia se había establecido en Carolina del Sur, pero desconocía completamente su historia y lo que había sido de ellos. El Morrow partió del estuario del río Mersey el 15 de junio y durante varias semanas tuvimos brisas ligeras y cielos cubiertos. El patrón del barco, un marinero admirable (pero nada más), no nos ofreció, salvo a la hora de comer, demasiada hospitalidad, por lo que la joven Miss Janette Harford y yo hicimos amistad enseguida.",
            "usuario"=>"hilda",
            ]
            );
            
    }
}
