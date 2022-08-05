@extends('layouts.app')

@section('titulo')
    Editar categoría
@endsection


@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush


@section('content')
<x-boton-create/>
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white  rounded-lg shadow-xl mt-10 md:mt-0">
            <div class="mb-2 block uppercase text-gray-500 font-bold text-center">
                <h1>Actualización de Categoría</h1> 
            </div>
            
            <form action="{{ route('categorias.update', $category->id) }}" method="POST" novalidate>
                @csrf
                @method('PATCH')
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
                        value="{{ $category->category }}"
                        autocomplete="off"
                    />

                    @error('category')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
               
               
                <div class="mb-5 flex">
                    <label for="Estado" class="mb-2 block uppercase text-gray-500 font-bold mt-2">Estado</label>
                    <input type="checkbox" name="status" class="default"  {{ $category->status === 1 ? 'checked' : '' }} />                              
                </div> 


                <div class="mb-5">
                 
                    <img src="{{ asset('uploads/'. $category['banner']) }}" alt="{{ $category->category }}">
                </div>

                
                <div class="mb-5">
                    <input 
                        name="imagen"
                        type="hidden"
                        value="{{ $category->banner }}"
                    />
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <input
                    type="submit"
                    value="Actualizar Categoría"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
            <div class="flex justify-center mt-2"><a href="{{ route('categorias.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
              </svg></a></div>
        </div>
    </div>
@endsection