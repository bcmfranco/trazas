@include('layouts.head')
<title>Administrador</title>
</head>
<body>
    <div>
        @include('layouts.cabeza')
    </div>
    <div>
        @include('layouts.barra')
    </div>
    <div class="titulo">
        <h3>Bienvenido Administrador</h3>
    </div>
    <div>
        <h5><a class="tarjeta1 tarjeta15" href="/postsLista">Todos los posteos</a></h5>
    </div>
    <div>
        <h5><a class="tarjeta1 tarjeta15" href="/comentariosLista">Todos los comentarios</a></h5>
    </div>
    <div>        
        <h5><a class="tarjeta1 tarjeta15" href="/postsAgregar">Agregar un posteo</a></h5>
    </div>
    <div>        
        <h5><a class="tarjeta1 tarjeta15" href="/aleatorio">Post aleatorio</a></h5>
    </div>
    <div class="footer">
        @include('layouts.footer')
    </div>
</body>
</html>