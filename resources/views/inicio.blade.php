
@section('content')  
@include('layouts.head')
<title>Historias</title>
</head>
<body>    
    <div>
        @include('layouts.cabeza')
    </div>
    <div>
        @include('layouts.barra')
    </div>
   <div class="titulo">
        <h1>Historias</h1>
   </div>
   <div class="subtitulo">
        <h2>
            <p>Aunque haya leyes que los contradigan, se trata de sucesos reales</p>
            <p>Sencillamente porque han sucedido</p>
        </h2>
   </div>
   <div class="tarjeta20">
        <h5><a class="btn tarjeta201"href="/aleatorio">Comenzar</a></h5>
    </div>  
    <div class="tarjeta20">
        <h5><a class="btn tarjeta201"href="/admin">Panel de administración</a></h5>
    </div> 
    <div class="footer">
        @include('layouts.footer')
    </div>    
    <div id="nosotros">
        @include('layouts.nosotros')
    </div>
</body>
</html>