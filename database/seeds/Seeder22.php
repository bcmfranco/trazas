<?php

use Illuminate\Database\Seeder;

class Seeder22 extends Seeder
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
            "id"=>"22",
            "titulo"=>"El Basilísco",
            "cuerpo"=>"Dice la Real Academia Española (Diccionario Karten ilustrado, abril 1975): m. Animal fabuloso al que se atribuía la propiedad de matar con la mirada - Ec. Reptil del tamaño de una iguana pequeña, de hermoso color verde.
            
            [El Basilísco] Era muy utilizado por nuestros padres y abuelos el término  Esta hecho un basilisco , o  Es un basilisco , en referencia a cuando alguien está como endiablado, enloquecido, enfurecido.
            
            Este reptil es un animal muy extraño, semejante a una lagartija con un solo ojo en la frente redondo y sin párpados. En otros casos lo representan como una animal con cabeza de gallo y cuerpo de serpiente (seguramente proveniente de la mitología europea).
            
            [El Basilísco] Dice la  leyenda que nace de los huevos pequeños y sin yema que ponen algunas gallinas y en algunas regiones se comenta que de los huevos puestos por gallos viejos. Paleari completa este concepto diciendo que nace de  un huevo sin yema puesto por un gallo y empollado por un sapo sobre el estiércol .
            
            El basilisco puede esconderse en cualquier recoveco de la casa y la persona que lo vea al ojo puede morir de inmediato o quedar ciega. Una forma de combatir a este prodigio es lograr que se observe en un espejo y muera del espanto.
            [La muerte del basilisco] Hay que tener cuidado de destruir los huevos antes de que el animal nazca, pues su gestación dura alrededor de un día.
            
             Nos dice Antonio Paleari, en su completísimo Diccionario mágico jujeño, que el término proviene del griego  basiliskós , que significa reyezuelo, rey con menguado reino. Es interesante la relación que hace el mismo Paleari entre este extraño ser y los animales de la mitología azteca, maya o chibcha; quizá estableciendo alguna relación primitiva entre las distintas civilizaciones y sus mitos.
            
            En la zona de Jujuy y parte de la puna el reptil es semejante a cualquier lagarto, pero en la zona de los valles y parte de Tucumán, Santiago y Catamarca, muchos paisanos aseguran que tiene un solo ojo en la frente, como hemos referido anteriormente. Así como un espejo mata al basilisco, Paleari nos dice que el monstruo también muere si es visto antes por un hombre.",
            "usuario"=>"viviana",
            ]
            );
            
    }
}
