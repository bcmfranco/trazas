<?php

use Illuminate\Database\Seeder;

class Seeder21 extends Seeder
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
            "id"=>"21",
            "titulo"=>"Las azucenas del bosque",
            "cuerpo"=>"Tupá, el dios sol, creó los animales y los bosques, y luego de mucho tiempo comenzó a pensar en crear a los hombres, con la inteligencia suficiente para gobernar hasta a los animales más feroces. Luego convocó a Iyara (el cielo) y le pidió que le trajera arcilla de la tierra. Con esa greda, el dios hizo dos figuras humanas y les dió vida.
            
            Así nacieron dos hermanos, uno con la piel más roja llamado Pitá y otro con la piel blanca llamado Morotí.
            
            Tupá e Iyara le dieron una compañera a cada uno y se procrearon con amor viviendo en la selva y comiendo sus frutos.
            
            Pero una vez, Pitá frotó dos piedras y descubrió el fuego, a su vez, Morotí, defendiéndose de un pecarí, debió matarlo y... sin saber porque... arrojaron la carne del animal al fuego... tan agradable era el olor que emanaba de la carne asada que lo probaron y  les pareció exquisito.
            
            Desde aquel momento empezaron a cazar y abandonaron la recolección de frutos... y, desde aquel momento, se quebró la paz entre las familias de los hermanos.... ya que usaron las armas, creadas para cazar, para enfrentarse entre ellos, debido a que la caza era cada vez más escasa... En vez de combatir a su verdadero enemigo, el hambre, decidieron herirse a sí mismos.
            
            Tupá, enojado, decidió castigar a los hermanos, por necios, y provocó una aterrante tormenta que duró 3 días y 3 noches, al cabo de las cuales, salió y el sol, por uno de cuyos rayos bajó Iyara.
            
            -Tupá está enojado con ustedes... ¡son hermanos!, ¡hijos de hermanos! y me enviaron para unirlos nuevamente...-
            
            -¡Pita!, ¡Morotí! ¡Dense un abrazo!, ordenó Iyara.
            
            Los hermanos se abrazaron y, allí, en presencia de todos... fueron perdiendo sus formas humanas y se fueron fundiendo hasta convertirse en un solo cuerpo, que se hizo un tronco y de ese tronco salieron ramas y de las ramas hojas y flores.
            
            Y las flores fueron rojas al principio (como la piel de Pitá), lilas al marchitarse hasta ser blancas al caer (como la piel de Morotí).
            
            Así nació esta Azucena del Bosque, que Tupá dejó en la tierra para recordar a los hombres que deben vivir unidos...",
            "usuario"=>"ubaldo",
            ]
            );
            
    }
}
