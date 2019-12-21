<?php

use Illuminate\Database\Seeder;

class Seeder15 extends Seeder
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
            "id"=>"15",
            "titulo"=>"La Cárcel",
            "cuerpo"=>"En ella, un reo había sido sentenciado a morar por siempre en una vieja, sucia y oscura mazmorra. No queriendo arrepentirse de su desatinada vida, orgulloso gritó que de alguna forma escaparía. El rey, en un acto de misericordia y gracia, le dijo que le perdonaría todo si encontraba la única salida existente.
            
            Su celda tenía una roca suelta, una alta ventana, y un registro de desagüe. El preso intentó llegar a la ventana. Cuando lo logró, le llevó años aflojar los barrotes, solo para darse cuenta de que la altura era tal, que le causaría la muerte intentar saltar. El desagüe no fue tampoco la respuesta, ya que si bien estaba abierto, se ahogaría antes de llegar al río. Los años pasaron. Decidió escarbar por la roca suelta. Lo hizo, sólo para constatar que al otro lado había una celda igual. La soledad era impresionante, el encierro se hacía parte de él.
            
            Antes de morir de viejo el reo dijo al rey: «Tu me prometiste libertad, pasé mi vida buscándola con todas mis fuerzas y no la hallé. De haberla… ¿Cuál era esa única salida?». El rey le respondió: «Nunca me buscaste, no te arrepentiste. La puerta estaba abierta… ¡La salida era yo!».
            
            “La soledad es la única cárcel que se cierra por dentro». Y es cierto. Muchas veces cerramos el corazón al amor, al quebrantamiento, a la verdad, al arrepentimiento. Buscamos hacer salidas, olvidando el único camino para ser libres, encerrándonos en nuestros errores hasta que no podemos ya ver la salida que se encuentra bloqueada por paredes, por muros y castillos de necedad, de costumbre, autosuficiencia y orgullo.",
            "usuario"=>"norberto",
            ]
            );
            
    }
}
