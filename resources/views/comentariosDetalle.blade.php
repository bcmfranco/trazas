<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Bree+Serif|Cormorant+Garamond|PT+Sans|Ubuntu&display=swap" rel="stylesheet">  
    <title>Detalle de comentario</title>
</head>
<body>
    <div>
        @include('layouts.cabeza')
    </div>
    <div>
        @include('layouts.barra')
    </div>
    <div class="titulo">
        <h3>Detalle del comentario</h3>
    </div>
    <div class="texto">
        <div>
            <ul>
                <li class="tarjeta1">{{$comentario->cuerpo}}</li>
                <li class="tarjeta3">{{$comentario->creado}}</li>
                <li class="tarjeta3">{{$comentario->usuario_id}}</li>
                @if ($comentario->post)                
                <li class="tarjeta3">{{$comentario->post->titulo}}</li>
                @endif
            </ul>
        </div>
    <div class="tarjeta12">
        <form action="/comentariosBorrar" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" id="" value="{{$comentario->id}}">
            <input type="submit" value="Borrar comentario" name="" id="" class="tarjeta121">
        </form>
    </div>
    <div class="tarjeta13">
        <h5><p><a class="tarjeta101" href="/admin">Volver al panel de administrador</p></a></h5>
    </div>
    <div class="footer">
        Footer
    </div>
</body>
</html>