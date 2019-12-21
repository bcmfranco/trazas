<?php

use Illuminate\Database\Seeder;

class Seeder11 extends Seeder
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
"id"=>"11",
"titulo"=>"Un vendedor de Coca-Cola en Arabia corto de Educación",
"cuerpo"=>"Un vendedor de Coca-Cola que fue enviado a Arabia Saudita vuelve sin haber vendido ni una sola Coca-Cola. Su compañero le pregunta: «Con lo buen vendedor que eres, cómo es que no has tenido éxito con los saudíes?» Éste le dice: es un problema de educación.

El vendedor le explica: «Yo fui con todos mis argumentos de venta preparado para triunfar, pero cuando llegó la hora de la verdad, caí en la cuenta de que… oops… no sabía hablar árabe.

Pero mi fuerza de voluntad y mis técnicas  hicieron que no me detuviera, por lo que diseñé una estrategia de marketing basada en imágenes para que entendieran lo que vendía y las propiedades de la Coca-Cola.

Lo hice a través de 3 carteles:
-Primer cartel: un hombre derrumbado por el cansancio en la arena del desierto agotado y desmayado.
-Segundo cartel: El hombre bebe la Coca-Cola
-Tercer Cartel: Nuestro hombre está completamente repuesto, refrescado y es capaz de correr con total vitalidad por todo el desierto.

Puse esos carteles por todo Arabia Saudita.

Su compañero le dice: «Dios mío, qué buena idea y qué idea de Marketing más buena. Es terriblemente bueno. ¿Cómo es que no te funcionó y se dispararon las ventas de Coca-Cola?.

El vendedor le respondió: «Por la mala suerte.  Mecagüen, nadie me dijo que ellos lo leen todo de derecha a izquierda».",
"usuario"=>"jorge",
]
);

    }
}
