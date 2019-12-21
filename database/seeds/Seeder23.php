<?php

use Illuminate\Database\Seeder;

class Seeder23 extends Seeder
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
            "id"=>"23",
            "titulo"=>"Las Aguas del Bermejo",
            "cuerpo"=>"Hubo un tiempo en que las aguas del Bermejo fueron claras como las de sus vecinos, los ríos Pilcomayo y Uruguay. Un tiempo en que a sus orillas no se asomaban, como hoy, las casas de los pueblos formoseños, ni eran surcadas por las embarcaciones de los argentinos descendientes de europeos. Las tierras que recorría el Bermejo eran disputadas por dos tribus enemigas: los tobas y los matacos. Unos y otros atrapaban los peces de su cauce, se sumergían en su frescura en las tardes calurosas, deslizaban las canoas por su corriente y se sentaban a sus orillas en las noches de luna.
            
            La mayor afrenta que sufrieron los tobas durante esa larga guerra fue la captura de la hija del cacique, una joven hermosa y decidida, que pasó de vivir en sus chozas a las de los matacos. Aunque extrañaba a los suyos, poco a poco sus captores se le hicieron menos extraños, sobre todo desde que conoció al hijo del cacique y comenzaron a pasar largas horas juntos. Se enamoraron mientras conversaban a la sombra de un urunday, mientras nadaban en el río, mientras caminaban en silencio siguiendo al ciervo de los pantanos... Pero sus relaciones eran imperdonables. La unión entre una toba y un mataco estaba prohibida por los hombres y maldita por los dioses. Cuando el consejo de la tribu dio órdenes estrictas para prohibir los encuentros entre los jóvenes, ellos establecieron citas secretas y se amaron más todavía a la sombra de su sigilo.
            
            Sin embargo, no estuvieron a salvo de las habladurías, de los comentarios a media voz que deslizaban las viejas cuando se sentaban en rueda a tejer su yicas (bolsas tejidas con fibras vegetales) y a moler las semillas del algarrobo. Tampoco de las miradas de alguno que los había sorprendido al entrar en el monte tras un armadillo fugitivo o para recoger los frutos del jume.
            
            Y llegó el día en que, reunido nuevamente el consejo de la tribu, debieron comparecer ante él. Los jefes, que ya habían deliberado, los miraban en silencio. Los corazones de los jóvenes se aceleraron ante esos rostros severos e imperturbables. El cacique habló con voz suave y firme. Era preciso que todos respetaran las tradiciones de la tribu, con más razón tratándose del heredero de la autoridad: se les exigía la separación inmediata y definitiva.
            
            Ante la decidida oposición de los jóvenes príncipes, que se sabían unidos por los lazos indestructibles urdido por palabras, miradas y gestos recientemente descubiertos, alma con alma y cuerpo con cuerpo, el consejo emitió el fallo final: los amantes serían sacrificados, se les arrancarían los corazones y éstos serían arrojados al río, como lección y advertencia para quienes se atrevieran a contrariar las leyes de los hombres y las disposiciones divinas.
            
            El sol del mediodía brillaba en lo alto del cielo mientras la tribu se reunía pra presenciar la ejecución. Si algo de viento agitó las ramas de los arbustos, si las cigarras cantaban su canción filosa y monocorde, si el río dejó oír su rumor, nadie lo supo cuando los jóvenes fueron llevados a lo alto del barranco y muertos por el haiawú (hechicero de la tribu), cuando el agua aceptó sus corazones sangrantes y se tiñó de rojo para siempre.
            
            Cumplido el sacrificio, a los pocos días, la gente se acercó al barranco por un rumor: los corazones no habían sido arrastrados por la corriente; flotaban juntos exactamente en el mismo lugar en el que habían caído.
            
            ¿Era acaso que los dioses no estaban conformes con el fallo? ¿Sobrevendrían entonces pestes, sequías y escasez? Los jefes acordaron sacar los corazones del agua y convertirlos en cenizas, para que que no quedara rastro de ese amor que había desconocido la tradición.
            
            Todos los matacos formaron la gran pira, no hubo nadie que contrariara a los dioses. Los corazones ardían al compás de los pimpines (tambor mataco), abrasados por el fuego que, cada vez más alto, ahuyentaba los mosquitos e iluminaba los cuerpos de los bailarines.
            
            Días después, cuando un enviado volvió al lugar para comprobar que las cenizas hubieran sido dispersadas por el viento, vio con asombro cercano al terror que donde estuviera la pira había crecido un arbolito desconocido. Entre sus verdes hojas mostraba dos únicas flores rojas, una al lado de la otra, en forma de corazón.
            
            A la sombra del letanetá, como llamaron los matacos a la nueva planta, y mecida por las aguas del río que encontró su nombre, nació entonces la amistad entre los tobas y matacos, que todavía luchan en el monte para sobrevivir.",
            "usuario"=>"walter",
            ]
            );
            
    }
}
