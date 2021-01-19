
@extends('plantilla')



@section('cuerpo')

<main>
    <section>
        <h2 class="saludo"> <strong>HOLA</strong> </h2>
        <h2 class="titulo">SOMOS MELI & JUAN STRAZZERI</h2>
        <div class="sobre-nosotros">
            <div class="contenedor-sobre-nosotros">
                <p>
                    Les presentamos con gran satisfacción nuestros productos artesanales lleno de amor y experiencias que deseamos que disfrutes. Para comenzar permítenos decirte que nuestros principales ingredientes son el fruto de italianos que se enamoraron de nuestra hermosa tierra.
                    
                    ¡La creatividad e inspiración dieron su fruto, presentándoles nuestras tablas de queso, que comienza por un queso Cacciota (un queso suave y gusto almendrado), que contrasta deliciosamente con nuestro chorizo italiano!!!
                    <img src="{{asset('img/pareja.jpg')}}" alt="pareja" class="imagen-nosotros">
                    Estos dos te permiten comenzar con este viaje de sabores, tomate tu tiempo, sin prisa con buen Vino o sangría. Continua con sabores italianos, como el Vezzena, acompañado con salami y aceitunas. Para el final te recomendamos el pasiego y el camembert, que con miel contrastaras su sabor delicado, fuerte, delicioso y sencillo.

                    Cada producto de nuestra tabla lo puedes encontrar por individual y por libra, solo dinos como era su sabor y te daremos sus características,también hemos preparado Pastas, Lasañas, Pizzas & varios productos congelados, empacadosal vacío con la esperanza de que disfrutes este viaje de experiencias italianas tanto como nosotros al prepararlas.
                </p>
            </div>
        </div>
    </section>
</main>



@endsection