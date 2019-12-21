@include('layouts.head')
<title>Detalle</title>
</head>
<body>    
    <div>
        @include('layouts.cabeza')
    </div>
    <div>
        @include('layouts.barra')
    </div>
    <div class="titulo">
        <h3>Detalle del post</h3>
    </div>
    <div class="texto">
        <div class="">
            <ul>
                <li class="tarjeta1">{{$post->titulo}}</li>
                <li class="tarjeta2">{{$post->cuerpo}}</li>
                <li class="tarjeta3">Del usuario: {{$post->usuario}}</li>
                <li class="tarjeta3">Creado el: {{$post->creado}}</li>
            </ul>
        </div>
    </div>
    <div class="otrosComentarios">
            <ul>
                <li class="tarjeta4">
                    <p class="tarjeta4">Otras reacciones</p>
                    @foreach ($post->comentarios as $comentario)
                    <div class="">
                        <p class="tarjeta5">{{$comentario->cuerpo}}</p>
                    </div>
                    @endforeach
                </li>
            </ul>
    </div>
    <div class="tarjeta9">
        <form class="" action="/postBorrar" method="post">
        {{csrf_field()}}
            <input type="hidden" name="id" id="" value="{{$post->id}}">
            <input type="submit" value="Borrar post" name="" id="" class="tarjeta91">
        </form>
    </div>
    <div class="tarjeta10 center">
        <h5><a href="/admin"><p class="tarjeta101">Volver al panel de administrador</p></a></h5>
    </div>    
    <div class="footer">
        @include('layouts.footer')
    </div>
</body>
</html>