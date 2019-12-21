@include('layouts.head')
    <title>Agregar comentarios</title>
</head>
<body>
    <div class="container">
        <h3>Dejá tu comentario</h3>
    </div>
    <clas class="container form">
        <form action="comentariosAgregar" method="post">
            {{csrf_field()}}
            <div class="element">
                <label for="cuerpo">Comentario</label>
                <input type="text" name="cuerpo" id="" value="">
            </div>
            <div class="element">
                Acá iría el id del post al cual se agrega el comentario
            </div>
            <div class="element">
                <label for="creado">Fecha</label>
                <input type="date" name="creado">
            </div>
            <div class="element">
                <label for="usuario_id">Nick</label>
                <input type="textarea" name="usuario_id" id="" value="">
            </div>
            <div class="element">
                <input type="submit" value="Comentar"name="" id="">
            </div>
        </form>
    </clas>
</body>
</html>