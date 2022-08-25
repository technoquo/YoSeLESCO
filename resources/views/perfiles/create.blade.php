@extends('layouts.app')

@section('titulo')
    Crea un perfil
@endsection


@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush



@section('content')
@auth
    <x-boton-create />
  
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white  rounded-lg shadow-xl mt-10 md:mt-0">
            <div class="mb-2 block uppercase text-gray-500 font-bold text-center">
                <h1>Creación de Perfil</h1>
            </div>

            <form action="{{ route('perfiles.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="full_name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre completo
                    </label>
                    <input id="full_name" name="full_name" type="text" placeholder="Nombre completo"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('full_name') }}" autocomplete="off" />

                    @error('full_name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                    </label>
                    <input id="username" name="username" type="text" placeholder="usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}" autocomplete="off" />

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="occupation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Ocupación
                    </label>
                    <input id="occupation" name="occupation" type="text" placeholder="Ocupación"
                        class="border p-3 w-full rounded-lg @error('occupation') border-red-500 @enderror"
                        value="{{ old('occupation') }}" autocomplete="off" />
                    @error('occupation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="Whatsapp" class="mb-2 block uppercase text-gray-500 font-bold">
                        Número de Whatsapp
                    </label>
                    <input id="cell" name="cell" type="text" placeholder="Whatsapp"
                        class="border p-3 w-full rounded-lg"
                        value="{{ old('cell') }}" autocomplete="off" />
                      
                </div>


                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="text" placeholder="Email"
                        class="border p-3 w-full rounded-lg"
                        value="{{ old('email') }}" autocomplete="off" />
                      
                </div>

                <div class="mb-5">
                    <label for="Website" class="mb-2 block uppercase text-gray-500 font-bold">
                        Página Web
                    </label>
                    <input id="website" name="website" type="text" placeholder="Website"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('website') }}" autocomplete="off" />
                    
                </div>

                <div class="mb-5">
                    <label for="Instagram" class="mb-2 block uppercase text-gray-500 font-bold">
                        Instagram
                    </label>
                    <input id="instagram" name="instagram" type="text" placeholder="Instagram"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('instagram') }}" autocomplete="off" />
                    
                </div>

                <div class="mb-5">
                    <label for="Facebook" class="mb-2 block uppercase text-gray-500 font-bold">
                        Facebook
                    </label>
                    <input id="facebook" name="facebook" type="text" placeholder="Facebook"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('facebook') }}" autocomplete="off" />
                      
                </div>

                <div class="mb-5">
                    <label for="Twitter" class="mb-2 block uppercase text-gray-500 font-bold">
                        Twitter
                    </label>
                    <input id="twitter" name="twitter" type="text" placeholder="Twitter"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('twitter') }}" autocomplete="off" />
                     
                </div>

                <div class="mb-5">
                    <label for="Youtube" class="mb-2 block uppercase text-gray-500 font-bold">
                        Youtube
                    </label>
                    <input id="youtube" name="youtube" type="text" placeholder="Youtube"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('youtube') }}" autocomplete="off" />
                     
                </div>

                <div class="mb-5">
                    <label for="Google" class="mb-2 block uppercase text-gray-500 font-bold">
                        Google
                    </label>
                    <input id="google" name="google" type="text" placeholder="Google"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('google') }}" autocomplete="off" />
                     
                </div>

                <div class="mb-5">
                    <label for="Linkedin" class="mb-2 block uppercase text-gray-500 font-bold">
                        Linkedin
                    </label>
                    <input id="linkedin" name="linkedin" type="text" placeholder="Google"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('linkedin') }}" autocomplete="off" />
                     
                </div>

                <div class="mb-5">
                    <label for="Telegram" class="mb-2 block uppercase text-gray-500 font-bold">
                        Telegram
                    </label>
                    <input id="telegram" name="telegram" type="text" placeholder="Google"
                        class="border p-3 w-full rounded-lg "
                        value="{{ old('telegram') }}" autocomplete="off" />
                     
                </div>

                <div class="mb-5">
                    <label for="Categorias" class="mb-2 block uppercase text-gray-500 font-bold">Categoría</label>
                    <select name="categoria_id"
                        class="bg-gray-50 border border-gray-300  text-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Seleccione</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->category }}</option>
                        @endforeach
                    </select>
                    @error('categoria_id')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
                </div>

                <div class="mb-5 flex">
                    <label for="Estado" class="mb-2 block uppercase text-gray-500 font-bold mt-2">Estado</label>
                    <input type="checkbox" name="status" class="default:ring-2 ml-2" />
                </div>


                <div class="mb-5">
                    <input name="imagen" type="hidden" value="{{ old('imagen') }}" />
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <input type="submit" value="Crear Perfil"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
    @endauth
@endsection
