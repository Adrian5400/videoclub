<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="w-full max-w-lg border-4" method="POST" action="{{ $route }}" enctype="multipart/form-data">
                @csrf

                @if($film->id)
                    @method('PUT')
                @endif
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">{{ __("Inserta tu película") }}</h2>

                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Title
                        </label>
                        <input value="{{ old('title') ?? $film->title }}" name="title" type="text" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-300 p-2.5 ">

                        @error('name')
                            <p class="text-sm text-red-500"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="synopsis" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Synopsis
                        </label>
                        <textarea  rows="5" cols="50" name="synopsis" id="synopsis"
                            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                        {{ old('synopsis') ?? $film->synopsis }}
                        </textarea>

                        @error('synopsis')
                            <p class="text-sm text-red-500"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="year" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Year
                        </label>
                        <input value="{{ old('year') ?? $film->year }}" name="year" type="text" id="year"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-100 p-2.5 ">

                        @error('year')
                            <p class="text-sm text-red-500"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="director" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Director
                        </label>
                        <input value="{{ old('director') ?? $film->director }}" name="director" type="text" id="director"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                        @error('director')
                            <p class="text-sm text-red-500"> {{ $message }} </p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="poster" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Imagen
                        </label>
                        <input value="{{ old('image') ?? $film->poster }}" name="poster" type="file" id="poster"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        
                        @error('image')
                            <p class="text-sm text-red-500"> {{ $message }} </p>
                        @enderror
                    </div>


                    <div class="mb-6">
                        @error('usuario')
                            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="rented" class="block mb-2 text-sm font-medium text-gray-900">
                            Alquilado
                        </label>
                        <select name="rented" id="rented"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                            <option value="1" @if(old('rented', $film->rented) == '1') selected @endif>Alquilado</option>
                            <option value="0" @if(old('rented', $film->rented) == '0') selected @endif>No alquilado</option>
                        </select>
                        @error('rented')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">{{ __("Categoría") }}
                        </label>
                        <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                            @foreach(\App\Models\Category::get() as $category)
                                <option {{ (int) old("category_id", $film->category_id) === $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ $textButton }}</button>
                </div>
                </form>
        </div>
    </div>


</x-app-layout>
