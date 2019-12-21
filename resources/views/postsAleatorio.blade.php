@include('layouts.perfil')
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
    <div class="agregarComentarios">
        <form class="" action="/comentariosAgregar" method="post">
            {{csrf_field()}}
            <div class="element tarjeta26">
                <input type="hidden" name="post_id" value="{{$post->id}}">                
            </div>
            <div class="element">
                <div class="subelement">
                    <label for=""><p class="tarjeta8">Reaccioná</p></label>
                </div>
                <div class="subelement">                    
                    <select name="cuerpo" id="" class="tajeta29 mb-2">
                        <option value="me gusta">Me gusta</option>
                        <option value="me hace reír">Me hace reír</option>
                        <option value="me hace pensar">Me hace pensar</option>
                        <option value="me da miedo">Me da miedo</option>
                    </select>
                </div>
                <div class="subelement">
                    <input class="btn tarjeta111" id="forularioHijo" type="submit" name="" id="" value="Comentar">
                </div>
            </div>
        </form>
    </div>
    <div class="otrosComentarios">
            <ul>
                <li class="tarjeta4">
                    <p class="tarjeta4">Otros comentarios</p>
                    @foreach ($post->comentarios as $comentario)
                    <div class="">
                        <p class="tarjeta5">{{$comentario->cuerpo}}</p>
                    </div>
                    @endforeach
                </li>
            </ul>
    </div>    
    <div class="footer">
        @include('layouts.footer')
    </div>
</body>
</html>