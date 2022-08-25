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
        <div class="grid md:grid-cols-3 gap-4 mt-12">
            @foreach ($banner->perfiles as $perfil)
                <div class="max-w-sm text-center">
                    <div class="flex justify-center">
                        <img class="rounded-full w-52" src="{{ asset('uploads') . '/' . $perfil->imagen }}"
                            alt="Imagen del banner {{ $perfil->full_name }}">
                    </div>
                    <div class="p-5">

                        <h5 class="text-2xl" style="color: {{ $banner->color }}">{{ $perfil->full_name }}</h5>

                        <div class="mb-3  font-semibold text-lg" style="color: {{ $banner->color }}">
                            {{ $perfil->occupation }}.</div>

                        @if ($perfil->cell != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/whatsapp-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/whatsapp-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2"><a href="https://wa.me/{{ $perfil->cell }}"
                                        target="_blank">{{ $perfil->cell }}</a></div>
                            </div>
                        @endif

                        @if ($perfil->instagram != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7"
                                            src="{{ asset('img/contactos') . '/instagram-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/instagram-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2"><a
                                        href="https://www.instagram.com/{{ str_replace('@', '', $perfil->instagram) }}"
                                        target="_blank">{{ $perfil->instagram }}</a></div>
                            </div>
                        @endif
                        @if ($perfil->facebook != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/facebook-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/facebook-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2"><a
                                        href="https://www.facebook.com/{{ str_replace('@', '', $perfil->facebook) }}"
                                        target="_blank">{{ $perfil->facebook }}</a></div>
                            </div>
                        @endif
                        @if ($perfil->twitter != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/twitter-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/twitter-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2"><a
                                        href="https://www.instagram.com/{{ str_replace('@', '', $perfil->twitter) }}"
                                        target="_blank">{{ $perfil->twitter }}</a></div>
                            </div>
                        @endif
                        @if ($perfil->email != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/correo-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/correo-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2"><a href="mailto:{{ $perfil->email }}">{{ $perfil->email }}</a>
                                </div>
                            </div>
                        @endif
                        @if ($perfil->youtube != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/youtube-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/youtube-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2"><a href="{{ $perfil->youtube }}"
                                        target="_blank">{{ $perfil->youtube }}</a>
                                </div>
                            </div>
                        @endif

                        @if ($perfil->google != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/googleplay-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/googleplay-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2">{{ $perfil->google }}</a>
                                </div>
                            </div>
                        @endif

                        @if ($perfil->linkedin != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/linkedin-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/linkedin-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2"><a href="">{{ $perfil->linkedin }}</a></div>
                            </div>
                        @endif

                        @if ($perfil->telegram != '')
                            <div class="flex justify-center" style="color: {{ $banner->color }}">
                                <div>
                                    @if ($banner->color == '#05A8E1')
                                        <img class="w-7" src="{{ asset('img/contactos') . '/telegram-celeste.png' }}" />
                                    @else
                                        <img class="w-7" src="{{ asset('img/contactos') . '/telegram-verde.png' }}" />
                                    @endif
                                </div>
                                <div class="mt-2 ml-2">
                                    <div class="mt-2 ml-2"><a
                                            href="https://t.me/{{ str_replace('@', '', $perfil->telegram) }}"
                                            target="_blank">{{ $perfil->telegram }}</a></div>
                                </div>
                            </div>
                        @endif

                        <div class="mb-3 hidden">
                            <a href="#"
                                class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white focus:ring-4 focus:outline-none rounded-md"
                                style="background-color: {{ $banner->color }}">
                                Ver video
                            </a>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
