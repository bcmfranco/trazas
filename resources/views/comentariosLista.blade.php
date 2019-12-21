@include('layouts.head')
    <title>Lista de comentarios</title>
</head>
<body>
    <div>
        @include('layouts.cabeza')
    </div>
    <div>
        @include('layouts.barra')
    </div>
    <div class="titulo">
        Todos los comentarios
    </div>
    <div class="tarjeta20">
        <h5><a class="btn tarjeta201"href="/admin">Volver al panel de administración</a></h5>
    </div>
    <div>
        @forelse ($comentarios as $comentario)
        <div>
            <ul class="tarjeta19">
                <li class="tarjeta17">{{$comentario->cuerpo}}</li>
                    @if ($comentario->post)
                    <li class="tarjeta16">{{$comentario->post->titulo}}</li>
                    @endif
                    <li class="tarjeta17">{{$comentario->usuario_id}}</li>
                    @if ($comentario->nick != null)
                    <li class="tarjeta17">{{$comentario->nick}}</li>
                    @endif
                <li class="tarjeta17"><a class="tarjeta18"  style="width: 58rem;" href="/comentario/{{$comentario->id}}">Más detalles</a></li>
            </ul>
        @empty
        @endforelse
        </div>
    </div>
    <div class="tarjeta20">
        <h5><a class="btn tarjeta201"href="/admin">Volver al panel de administración</a></h5>
    </div>    
    <div class="footer">
        @include('layouts.footer')
    </div>
</body>
</html>