<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            Listado de films
        </h2>
    </x-slot>

    @if (session('success'))
    <div class="max-w-4xl mx-auto mt-8 bg-green-700 text-white p-3 rounded-lg">
        {{ session('success') }}
    </div>
    @endif 

<div class="grid grid-cols-4 gap-4 mx-40">

<div class="col-md-2 mt-5">
    <img src="{{ asset('imagenes/'.$film->poster) }}" alt="{{$film->poster}}" class="rounded img-fluid" title="job image">
</div>

    <div class="col-md-2">
        <div class="row">
        <p class="pt-6"><span class="font-bold">TITULO:</span>{{$film->title}}</p>
        <p class="pt-6"><span class="font-bold">YEAR:</span>{{$film->year}}</p>
        <p class="pt-6"><span class="font-bold">DIRECTOR:</span>{{$film->director}}</p>
        <p class="pt-6"><span class="font-bold">SYNOPSIS:</span>{{$film->synopsis}}</p>
        <p class="pt-6"><span class="font-bold">ESTADO:</span>@if ($film->rented == 1)
            Película disponible
        @else
            Película alquilada
        @endif</p>
        </div>
        <div class="inline-flex mt-5">
            @if($film->rented)
        <form action="{{ route('catalogo.rent2', $film) }}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="rounded-sm bg-green-500">
                Alquilar pelicula
            </button>
        </form>
            @else
            <br>
        <form action="{{ route('catalogo.rent', $film) }}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="rounded-sm bg-red-500">
                Devolver pelicula
            </button>
        </form>
        @endif
        <form action="{{ route('films.edit', $film->id) }}">
            <button type="submit" class="rounded-sm bg-yellow-500 ml-3">
                Editar pelicula
            </button>
        </form>
        <form action="{{ route('films.destroy', $film->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="rounded-sm bg-red-500 ml-4">
                Eliminar pelicula
            </button>
        </form>
        <form action="{{ route('catalogo.index')}}">
            <button type="submit" class="rounded-sm bg-blue-500 ml-4">
                Volver al listado
            </button>
        </form>
        </div>
    </div>
</div> 

</x-app-layout>