@extends('layouts.app')

@section('titulo')
    Yo sé LESCO
@endsection

@section('content')
    <div class="container mx-auto px-4 p-10">
        <div class=" flex justify-center">
            <img src="{{ asset('img/Home-desktop.png') }}" alt="Lista de profesionales" class="w-auto" />
        </div>
        <div class="grid md:grid-cols-3 gap-4">
            @foreach ($categorias as $categoria)
                <a href="{{ route('principal.show', $categoria->slug) }}">
                    <div class="flex flex-row rounded-md p-10" style="background-color: {{ $categoria->color }}">

                        <img class="w-20" src="{{ asset('uploads') . '/' . $categoria->icono }}"
                            alt="Imagen del banner {{ $categoria->category }}">
                        <div class="uppercase text-white font-bold mt-10  ml-5">{{ $categoria->category }}</div>



                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
