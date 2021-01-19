
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link href="https://file.myfontastic.com/CeMwaupzUpMz4DiGeKUoxd/icons.css" rel="stylesheet">
    @yield('link')
    <title>Samali</title>

</head>
<body>
    <header>
        <nav>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('catalogo')}}">Catalogo</a>
            <a href="{{route('nosotros')}}">Nosotros</a>
        </nav>
        <div class="contenedor-imagen-nombre">
            <img class="img-nombre" src="{{asset('img/nombre.png')}}" alt="nombre">
        </div>
        <section class="textos-header">
            <h1><strong>cocina artesanal</strong></h1>
            <h2>DESPENSA  ITALIANA</h2>
        </section>
        
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: white;"></path></svg></div>

    </header>
    @yield('cuerpo')
    <footer>
        <div class="contenedor-footer">
            <div class="contect-foo">
                <h4>Contactanos</h4>
                <p>
                    <Strong>Celular : </Strong> 321 8791576
                </p>
                <p>
                    <strong>Email : </strong> samaligranada@gmail.com
                </p>
            </div>
            <div class="contect-foo">
                <h4>Direccion</h4>
                <p>
                    Carrera 55 # 13 - 44
                </p>
            </div>
            <div class="contect-foo">
                <h4>Síguenos en: </h4>
                <p>
                    <a href="https://www.facebook.com/samalipizzeria" class="icon-facebook"> Facebook</a>
                </p>
                <p>
                    <a href="https://www.instagram.com/samaligranada/" class="icon-instagram"> Instagram</a>
                </p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Juan Strazzeri | Melisa Velasquez</h2>
    </footer>
</body>
</html>