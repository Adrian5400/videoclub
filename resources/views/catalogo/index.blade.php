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

<div class="grid grid-cols-3 gap-4 ml-20">

    @forelse ($films as $film)

    <div>
        <img src="{{ asset('images/'.$film->poster) }}" alt="{{$film->poster}}" class="rounded img-fluid" title="job image">
        <h4 class="min-h-45 my-5">
            {{$film->title}}
        </h4>
    </div>
    @empty
    <h3 class="text-2xl text-center font-bold p-5">No hay películas</h3>
    @endforelse

</div> 

</x-app-layout>