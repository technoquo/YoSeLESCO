@extends('layouts.app')

@section('titulo')
    Crea una categoría
@endsection


@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush


@section('content')
@auth
<x-boton-create/>
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <label for="Icono"></label>Icono</label>
            <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 px-10">
            <label for="Banner"></label>Banner</label>
            <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data" id="dropzone2" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>


        <div class="md:w-1/2 p-10 bg-white  rounded-lg shadow-xl mt-10 md:mt-0">
            <div class="mb-2 block uppercase text-gray-500 font-bold text-center">
                <h1>Creación de Categoría</h1> 
            </div>
            
            <form action="{{ route('categorias.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="Categoria" class="mb-2 block uppercase text-gray-500 font-bold">
                           Nombre de categoría
                    </label>
                    <input 
                        id="category"
                        name="category"
                        type="text"
                        placeholder="Nombre de categoría"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('category') }}"
                        autocomplete="off"
                    />

                    @error('category')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

               
                <div class="mb-5 flex">
                    <label for="Estado" class="mb-2 block uppercase text-gray-500 font-bold mt-2">Estado</label>
                    <input type="checkbox" name="status" class="default:ring-2 ml-2" />                              
                </div> 

                
                <div class="mb-5">
                    <input 
                        name="imagen"
                        type="hidden"
                        value="{{ old('imagen') }}"
                    />
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input 
                        name="banner"
                        type="hidden"
                        value="{{ old('banner') }}"
                    />
                    @error('banner')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <input
                    type="submit"
                    value="Crear Categoría"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
    @endauth
@endsection