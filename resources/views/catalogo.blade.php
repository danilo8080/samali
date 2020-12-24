
@extends('plantilla')


@section('cuerpo')

<main>
    <section class="contenedor-catalogo">
        <div class="contenedor-categorias">
            <ul class="menuCategorias">
                <li class="itemCategoria"><h2 class="tituloProductos"> CATEGORIAS: </h2></li>
                <li class="itemCategoria"><a  class="linkCat" href="{{route('catalogo','Tabla')}}">Tablas de quesos</a></li>
                <li class="itemCategoria"><a  class="linkCat" href="{{route('catalogo','Quesos')}}">Quesos</a></li>
                <li class="itemCategoria"><a  class="linkCat" href="{{route('catalogo','Raviolis')}}">Raviolis</a></li>
                <li class="itemCategoria"><a  class="linkCat" href="{{route('catalogo','Otros')}}">Otros</a></li>
            </ul>
        </div>
        @if($comando == null)
            <img src="{{asset('img/catalogo.png')}}" alt="bambina">
        @endif
        @if($comando == "Tabla")
            <div class="producto">
                <img src="{{asset('img/bambina.png')}}" alt="bambina">
                <h1 class="tituloProductos"><strong>Ingredientes : </strong></h1>
                <p>Queso cacciota, queso vezzena, queso café, chorizo italiano, salami, miel, aceitunas, uvas o fresas</p>
                <h1 class="tituloProductos"><strong>Adiciones : </strong></h1>
                <p class="adicionales">Caja de carton o madera.
                    Vino o sangría</p>
            </div>
            <div class="producto">
                <img src="{{asset('img/bella.png')}}" alt="bella">
                <h1 class="tituloProductos"><strong>Ingredientes : </strong></h1>
                <p>Queso cacciota, queso vezzena, queso al café, camembert, pasiego, chorizo italiano, salami, miel, aceitunas, uvas o fresas, chocolate amargo, tostadas, arándanos, almendras. </p>
                <h1 class="tituloProductos"><strong>Adiciones : </strong></h1>
                <p class="adicionales">Caja de madera.
                    Vino o sangría.</p>
            </div>
            <div class="producto">
                <img src="{{asset('img/awenturiera.png')}}" alt="awenturiera">
                <h1 class="tituloProductos"><strong>Ingredientes : </strong></h1>
                <p>queso cacciota, queso vezzena, queso al café, camembert, pasiego, chorizo italiano, salami, miel, aceitunas, uvas o fresas, chocolate amargo, tostadas, arándanos, almendras.  </p>
                <h1 class="tituloProductos"><strong>Adiciones : </strong></h1>
                <p class="adicionales">Caja de madera.
                    Vino o sangría.</p>
            </div>
            <div class="producto">
                <img src="{{asset('img/nobile.png')}}" alt="nobile">
                <h1 class="tituloProductos"><strong>Ingredientes : </strong></h1>
                <p>queso cacciota, queso vezzena, queso al café, camembert, pasiego, chorizo italiano, prosciutto, salami, miel, aceitunas, uvas o fresas, chocolate amargo, tostadas, arándanos, almendras.   </p>
                <h1 class="tituloProductos"><strong>Adiciones : </strong></h1>
                <p class="adicionales">Caja de madera.
                    Vino o sangría.</p>
            </div>
            <div class="producto">
                <img src="{{asset('img/regina.png')}}" alt="regina">
                <h1 class="tituloProductos"><strong>Ingredientes : </strong></h1>
                <p>queso cacciota, queso vezzena, queso al café, camembert, pasiego, chorizo italiano, prosciutto, salami, miel, aceitunas, uvas o fresas, chocolate amargo, tostadas, arándanos, almendras.   </p>
                <h1 class="tituloProductos"><strong>Adiciones : </strong></h1>
                <p class="adicionales">Caja de madera.
                    Vino o sangría.</p>
            </div>
            
        @endif
        @if($comando == "Quesos")
        <div class="producto">
            <img src="{{asset('img/quesos.png')}}" alt="quesos">
            <div class="quesos">
                <div class="suaves">
                    <h1 class="tituloProductos"><strong>Suaves : </strong></h1>
                    <p class="suaves-fuertes">Cacciota(100gr): <strong>$ 9.000</strong></p>
                    <p class="suaves-fuertes">Picante(100gr): <strong>$ 10.000</strong></p>
                    <p class="suaves-fuertes">Vezzena(100gr): <strong>$ 16.000</strong></p>
                    <p class="suaves-fuertes">Al café(100gr): <strong>$ 12.000</strong></p>
                    <p class="suaves-fuertes">Provolone Ahumado(100gr): <strong>$ 10.000</strong></p>
                </div>
                <div class="fuertes">
                    <h1 class="tituloProductos"><strong>Fuertes : </strong></h1>
                    <p class="suaves-fuertes">Camembert(100gr): <strong>$ 18.000</strong></p>
                    <p class="suaves-fuertes">Bufalart(100gr): <strong>$ 11.000</strong></p>
                    <p class="suaves-fuertes">Rockefort(100gr): <strong>$ 16.000</strong></p>
                    <p class="suaves-fuertes">Cabra(100gr): <strong>$ 16.000</strong></p>
                </div>
            </div>
        </div>
        @endif
        @if($comando == "Raviolis")
        <div class="producto">
            <img src="{{asset('img/raviolis.png')}}" alt="raviolis">
            <p>Raviolis(500gr): <strong>$ 32.000</strong>  (jamón y queso, maduro y queso, tres quesos, jamón y pollo)</p>
            <p>Fettucini, Spaghetti, Fussili (500gr): <strong>$ 15.000</strong></p>
            <p>Lasaña: <strong>$ 17.000</strong>  (Boloñesa o pollo y chorizo italiano )</p>
            <p>RaviolisChorizo Italiano(500gr): <strong>$ 17.000</strong></p>
            <p>Prosciutto(80 gr): <strong>$ 20.000</strong></p>
            <p>Chuzo Italiano(300gr): <strong>$ 15.000</strong>  (pollo, cerdo, chorizo, tocineta, pimentón, cebolla morada, chimichurri, aceite de oliva)</p>
        </div>
        @endif
        @if($comando == "Otros")
            <div class="producto">
                <img src="{{asset('img/lasaña.png')}}" alt="lasaña">
            </div>
            <div class="producto">
                <img src="{{asset('img/porchetta.png')}}" alt="porchetta">
            </div>
            <div class="producto">
                <img src="{{asset('img/canelones.png')}}" alt="canelones">
            </div>
            <div class="producto">
                <img src="{{asset('img/costilla.png')}}" alt="costilla">
            </div>
            <div class="producto">
                <img src="{{asset('img/raviolis-chorizo.png')}}" alt="raviolis-chorizo">
            </div>
        @endif
    </section>
</main>

@endsection