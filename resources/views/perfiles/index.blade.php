@extends('layouts.app')

@section('titulo')
    Lista de Perfiles
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
@endpush



@section('content')
    @auth
        <x-boton-create />

        <div class="flex justify-center p-12">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="py-3 px-6">
                                Nombre completo
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Ocupación
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Categoria
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Estado
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            @foreach ($categoria->perfiles as $perfil)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                    <td class="py-4 px-6">
                                        {{ $perfil->full_name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $perfil->occupation }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $categoria->category }}
                                    </td>
                                    <td class="py-4 px-6">
                                        @if ($perfil->status == '1')
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        @endif

                                    </td>

                                    <td class="py-4 px-6 text-right">
                                        <a href="{{ route('perfiles.edit', $perfil->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>
    @endauth
@endsection

@push('scripts')
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
@endpush
