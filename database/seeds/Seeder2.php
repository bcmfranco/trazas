<?php

use Illuminate\Database\Seeder;

class Seeder2 extends Seeder
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
            "id" => "2",
            "titulo" => "En francés, por favor.",
            "cuerpo" => "Hace algunos años me desperté al lado de mi (ahora ex) novia y empezamos una conversación bastante fluida en francés. Me levanté, me dirigí al baño y mientras el agua empezó a correr recordé que ninguno de los dos hablaba francés. Cuando salí del baño le pregunté. Ella recordaba lo que sucedió, pero estaba tan confundida como yo. Lo que es peor, no pude recordar lo que hablamos, pues no hablo absolutamente nada de francés. El cerebro es algo realmente raro.",
            "usuario" => "bastian",
            ]
            );
    }
}
