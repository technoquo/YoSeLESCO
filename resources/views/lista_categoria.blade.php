@extends('layouts.app')

@section('titulo')
    Yo sé LESCO
@endsection

@section('content')
    <div class="container mx-auto px-4 p-10">
        <div class="flex float-right">
            <div class="inline-flex text-cyan-600 pointer"><span class="mt-1 text-sky-500">Ir a la lista de
                    profesiones</span><a href="/" aria-label="lista de profesiones"><img class="w-5 mt-1 ml-1"
                        src="{{ asset('img/flecha.png') }}" alt="flecha"></a></div>
        </div>
        <div class="flex justify-center mt-10">
            <img src="{{ asset('uploads') . '/' . $banner['banner'] }}" />
        </div>
        <div class="grid md:grid-cols-3 gap-4">
            @foreach ($banner->perfiles as $perfil)
             
                <img class="rounded-full" src="{{ asset('uploads') . '/' . $perfil->imagen }}" alt="Imagen del banner {{ $perfil->full_name }}">
          
                @endforeach
        </div>


    </div>
@endsection
