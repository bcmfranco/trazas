<?php

use Illuminate\Database\Seeder;

class Seeder16 extends Seeder
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
            "id"=>"16",
            "titulo"=>"Historia de un pobre burro",
            "cuerpo"=>"Kenny, un muchacho de la ciudad, le compró un burro a un viejo campesino por 100 dólares.El anciano acordó entregarle el animal al día siguiente.
            
            Pero, al día siguiente…
            
            El campesino: Lo siento, pero tengo malas noticias, el burro se ha muerto. 
            
            Kenny: Bueno, entonces devuélvame mi dinero.
            
            El campesino: No puedo, ya me lo he gastado.
            
            Kenny: No importa, entrégueme el burro.
            
            El campesino: ¿Y para qué?
            
            ¿Qué vas a hacer con él?
            
            Kenny: Lo voy a rifar. 
            
            El campesino: ¡Estás loco! ¿Cómo vas a rifar un burro muerto?
            
            Kenny: Es que no le voy a decir a nadie que está muerto.
            
            Un mes después de este suceso, el campesino encontró nuevamente a Kenny, y…
            
            El campesino: ¿Qué pasó con el burro?
            
            Kenny: Lo rifé. Vendí 500 papeletas a dos dólares cada una y gané 998 dólares.
            
            El campesino: ¿Y nadie se quejó?
            
            Kenny: Sólo el ganador, a él le devolví sus 2 dólares.
            
            Kenny creció, y cuando fue mayor pasó a ocupar la dirección de la compañía ENRON (O de La Banca, con la estafa de las preferentes…).",            
            "usuario"=>"olga",
            ]
            );
            
    }
}
