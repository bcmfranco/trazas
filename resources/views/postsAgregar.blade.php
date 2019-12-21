@include('layouts.perfil')
@include('layouts.head')
<title>Agregar un post</title>
</head>
<body>    
    <div>
        @include('layouts.cabeza')
    </div>
    <div>
        @include('layouts.barra')
    </div>
    <div class="titulo">
        <h3>Contanos tu historia</h3>
    </div>
    <div class="errores">
        <div style="color:red" class="errores">
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </div>
    </div>
    <div class="agregarPost form-group container">
        <form action="postsAgregar" id="formularioPadre" method="post">
            {{csrf_field()}}
            <div class="tarjeta1 formularioHijo">
                <label for="titulo">Titulo</label>
            </div>
            <div class="tarjeta1" id="formularioHijo">
                <input type="text" name="titulo" id="" value="{{old('titulo')}}">
            </div>
            <div class="tarjeta2" id=" formularioHijo">
                <label for="cuerpo">Contá qué pasó</label>            
            </div>
            <div class="tarjeta2" id=" formularioHijo">
                <textarea name="cuerpo" id="" value="Contanos tu historia" cols="80" rows="10"></textarea>
            </div>
            <div class="subelement" id=" formularioHijo">
                <input type="submit" value="Compartir"name="" id="" class="btn tarjeta111">
            </div>
        </form>
    </div>    
    <div class="footer">
        @include('layouts.footer')
    </div>
</body>
</html>