@extends('layouts.app')

@section('titulo')
   Panel del Control
@endsection

@section('content')
<x-boton-create/>
    <div class="container mx-auto flex justify-between items-center mt-4">
        <x-boton-accion/>
    </div>
@endsection
