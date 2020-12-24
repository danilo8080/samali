
@extends('plantilla')

@section('cuerpo')

<main>
    <section class="contenedor sobre-presentacion">
        <h1 class="titulo">BIENVENIDOS!!</h2>
        <div class="slider">
            <ul>
                <li><img src="{{asset('img/carru1.png')}}" alt="carru1"></li>
                <li><img src="{{asset('img/carru2.png')}}" alt="carru2"></li>
                <li><img src="{{asset('img/carru3.jpg')}}" alt="carru3"></li>
                <li><img src="{{asset('img/carru4.png')}}" alt="carru4"></li>
            </ul>
        </div>
    </section>
</main>
<br>

    
@endsection
    