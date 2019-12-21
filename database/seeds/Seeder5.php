c1<?php

use Illuminate\Database\Seeder;

class Seeder5 extends Seeder
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
            "id"=>"5",
            "titulo"=>"Un sueño sobre el suicidio.",
            "cuerpo"=>"Cuando todavía pasaba por la adolescencia, durante una noche, tuve dos sueños muy pesados. Uno era sobre una amiga de Internet que me llamaba para contarme que había terminado con su novio, yo le canté algunos trozos de la canción “Don’t Cry” de Seal para que se animara un poco. En el segundo sueño estaba yo con otra amiga (de la vida real) muerta, flotando dentro de una bañera llena de agua.
            No pensé mucho en ese sueño hasta que esa misma noche entré a Internet y esa amiga a distancia me contó que había terminado con su novio. Inmediatamente le pregunté si podía llamarla, y ella dijo que no. Recuerdo que pensé que aquello podía significar algo, como si tuviera la oportunidad de cambiar las cosas.
            No mucho tiempo después, mi teléfono timbró. Era mi amiga de la vida real, del otro sueño, llamándome. Estaba aterrorizado en ese momento, pero intenté conversar con ella de la manera más normal posible. Me platicaba de la escuela y cosas de la rutina. Hasta que noté en el sonido de fondo el agua cayendo. Le pregunté “¿estás en la bañera?”. Ella respondió que sí y sentí que el corazón se me detuvo. Le pregunte “¿Qué hiciste?”. No respondió al instante, y después de una larga pausa, me contó que había ingerido un cóctel de medicamentos controlados mezclados con hongos alucinógenos y vodka. Se había acobardado al esperar sola el efecto, por lo que me llamó para calmarse. Colgué y llamé a la policía. Cuando los agentes llegaron, ya estaba inconsciente, pero seguía viva.
            Hoy es madre de una niña hermosa y vive feliz.",
            "usuario"=>"ernest",
            ]
            );
            
    }
}
