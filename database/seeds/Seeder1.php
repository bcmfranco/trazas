<?php

use Illuminate\Database\Seeder;

class Seeder1 extends Seeder
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
            "id" => "1",
            "titulo" => "¿Muerto o vivo?",
            "cuerpo" => "Mi madre me había llamado para darme la noticia. Me quedé muy mal después de eso. Me llamó en pleno horario de trabajo e incluso se lo conté a un compañero, que me dio sus condolencias por la pérdida de mi familiar.
            Algunas semanas después me encontraba platicando con mi hermana y me empezó a decir sobre un viaje que mi tía y tío estaban haciendo. Le dije que eso era imposible, pues él estaba muerto. Ella me aseguró que no, que estaba vivo. Entonces llamé a mi madre y, en realidad, no había muerto.",
            "usuario" => "anibal",
            ]
            );
    }
}
