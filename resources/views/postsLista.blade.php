@include('layouts.head')
    <title>Posts</title>
</head>
<body>    
    <div>
        @include('layouts.cabeza')
    </div>
    <div>
        @include('layouts.barra')
    </div>
    <div class="titulo">
    <h2>Todas las historias</h2>
    </div>
    <div class="tarjeta20">
        <h5><a class="btn tarjeta201"href="/admin">Volver al panel de administración</a></h5>
    </div>
    <div>
        @forelse ($posts as $post)
        <div>
            <ul class="tarjea19">
                <li class="tarjeta16">{{$post["titulo"]}}</li>
                <li class="tarjeta17">{{$post["usuario_id"]}}</li>
                <li class="tarjeta17">{{$post["creado"]}}</li>
                <li class="tarjeta17"><a class="tarjeta18" style="width: 58rem;" href="/post/{{$post->id}}">Más detalles</a></li>

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