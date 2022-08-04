<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description"
        content="Con este nuevo sello distinguimos a quienes se han capacitado con nosotros para comunicarse de forma fluida en Lengua de Señas 🤟😍." />
    <meta name="keywords" content="Yo sé LESCO, Hands On LESCO" />
    <meta name="keywords_news" content="Yo sé LESCO, Hands On LESCO" />
    <meta property="og:title" content="Yo sé LESCO">
    <meta property="og:description"
        content="Nuestro nuevo proyecto en Hands-On es el desarrollo de un Yo sé LESCO (Lengua de Señas Costarricense) de acceso gratuito para toda la comunidad, para que estudiantes y personas interesadas, o personas usuarias de la LESCO, puedan utilizar como material de repaso, aprendizaje y consulta en línea">
    <meta property="og:image" content="http://handsonlesco.com/wp-content/uploads/2021/09/hero-section-img.png" />
    <meta property="og:image:width" content="1500" />
    <meta property="og:image:height" content="843" />
    <meta property="twitter:card" content="Yo sé LESCO">
    <meta property="twitter:title" content=" Yo sé LESCO">
    <meta property="twitter:description"
        content="Nuestro nuevo proyecto en Hands-On es el desarrollo de un Yo sé LESCO (Lengua de Señas Costarricense) de acceso gratuito para toda la comunidad.">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon_handson.png" />
    <link rel="stylesheet" href="{{ asset('css/backtop.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />  

    <title>{{ config('app.name', 'Yo sé LESCO') }}</title>
  
   

</head>
<nav>
    <header class="bg-white py-6">

        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/') }}" class="no-underline">
                    <img class="inicio" src="{{ asset('img/hands.png') }}" alt="Hands On">
                </a>
            </div>
            <nav>
                <div class="hidden md:flex items-center space-x-1">
                    <ul class="flex text-sky-500">
                        <li><a class="no-underline text-black mr-4 hover:text-red-500" target="_blank"
                                href="https://www.handsonlesco.com/">¿Quienés somos?</a></li>
                        <li><a class="no-underline  text-black mr-4 hover:text-red-500" target="_blank"
                                href="https://handsonlesco.com/#el-equipo">El Equipo</a></li>
                        <li><a class="no-underline  text-black mr-4 hover:text-red-500" target="_blank"
                                href="https://www.handsonlesco.com/blog/">Blog</a></li>
                        <li><a class="no-underline  text-black mr-4 hover:text-red-500" target="_blank"
                                href="https://www.handsonlesco.com/contactanos/">Contactános</a> </li>
                        <li> <a class="mr-4 text-white bg-sky-500/100 hover:bg-white hover:border-sky-500/100 hover:border-2  hover:text-sky-500 transition duration-300 p-3 rounded"
                                target="_blank" href="https://www.handsonlesco.com/cursos/">Cursos</a></li>

                    </ul>

                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center bg-yellow-600">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-white " x-show="!showMenu" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <!-- mobile menu -->
                <div class="hidden mobile-menu">
                    <ul>
                        <li class="active"><a href="https://www.handsonlesco.com/"
                                class="block text-sm px-2 py-4 text-black" target="_blank">¿Quienés
                                somos?</a>
                        </li>
                        <li class="active"><a href="https://handsonlesco.com/#el-equipo"
                                class="block text-sm px-2 py-4 text-black" target="_blank">El Equipo</a>
                        </li>
                        <li><a href="https://www.handsonlesco.com/blog/" class="block text-sm px-2 py-4 text-black"
                                target="_blank">Blog</a>
                        </li>
                        <li><a href="https://www.handsonlesco.com/contactanos/"
                                class="block text-sm px-2 py-4 text-black" target="_blank">Contactános</a>
                        </li>
                        <li class=" mt-4">
                            <a class="mr-4 text-white bg-sky-500/100 hover:bg-white hover:border-sky-500/100 hover:border-2  hover:text-sky-500 transition duration-300 p-3 rounded"
                                target="_blank" href="https://www.handsonlesco.com/cursos/">Cursos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</nav>
<a id="backtop"></a>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
  
    @yield('content')
</body>

<footer class="mt-10 p-5 bg-black text-white w-full  left-0 bottom-0">
    <div class="justify-center md:flex">
        <div class="leading-extra-9">
            <div class="items-center space-x-1">
                <div class="md:flex">
                    <div class=""><a class="no-underline mr-4 hover:text-red-500" target="_blank"
                            href="https://www.handsonlesco.com/">¿Quienés somos?</a></div>
                    <div class=""><a class="no-underline  mr-4 hover:text-red-500" target="_blank"
                            href="https://handsonlesco.com/#el-equipo">El Equipo</a></div>
                    <div class=""><a class="no-underline  mr-4 hover:text-red-500" target="_blank"
                            href="https://www.handsonlesco.com/cursos/">Cursos de LESCO en Costa Rica</a></div>
                    <div class=""><a class="no-underline  mr-4 hover:text-red-500" target="_blank"
                            href="https://www.handsonlesco.com/blog/">Blog</a></div>
                    <div class=""><a class="no-underline  mr-4 hover:text-red-500" target="_blank"
                            href="https://www.handsonlesco.com/contactanos/">Contactános</a> </div>

                </div>
            </div>

        </div>
        <div class=" md:ml-32">
            <a href="{{ url('/') }}" class="no-underline">
                <img class="inicio" src="{{ asset('img/footer-logo.png') }}" alt="Hands On">
            </a>
            <div class="mt-2">
                <span class="p-2"><a href="http://instagram.com/hands.on.lesco" target="_blank"><i class="fa-brands fa-instagram text-2xl"></i></a></span>
                <span class="p-2"><a href="http://www.facebook.com/handsonlesco" target="_blank"><i class="fa-brands fa-facebook text-2xl"></i></a></span>
                <span class="p-2"><a href="https://www.youtube.com/channel/UCq6bWVfAzKzurKmhmFs5ahA" target="_blank"><i class="fa-brands fa-youtube text-2xl"></i></a></span>               
            </div>
        </div>
    </div>
    <div class="justify-center md:flex mt-10"> Hands On LESCO - Todos los derechos reservados
        {{ now()->year }}</div>
    <div class="justify-center md:flex mt-10">By Hands On - Departamento de TI <span class="ml-2"><i
                class="fa fa-hands"></i> </span></div>
</footer>
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/backtop.js') }}"></script> 
</html>
