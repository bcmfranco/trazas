<?php

use Illuminate\Database\Seeder;

class Seeder24 extends Seeder
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
            "id"=>"24",
            "titulo"=>"Caá Porá",
            "cuerpo"=>"Colombres, Adolfo en su SERES SOBRENATURALES DE LA CULTURA POPULAR ARGENTINA, nos dice que el Caá Porá es un fantasmón del monte de la región guaraní. Es un gigantesco hombre, peludo y que fuma una extraña pipa hecha de un cráneo y una tibia humanos.
            Se dice que captura a las personas y las devora chupándolas. Se lo ha descrito de formas contradictorias: una mujer que protege a los animales o un ser gigante y peludo que come crudo a los animales que el hombre hiere y no llega a matar.
            Según el mismo Colombres en Misiones y Corrientes, su zona de influencia, este ser aparece montado en un chancho del monte (pecarí) para traer desgracia a los cazadores despiadados.
            Desgraciadamente no tenemos datos de como hay que defenderse de este temible ser o que hay que hacer cuando se lo oye en el monte.",
            "usuario"=>"xullma",
            ]
            );
            
    }
}
