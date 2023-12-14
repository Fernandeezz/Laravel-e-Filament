<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/pdd4vby.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;300;400;600;700;800;900&family=EB+Garamond&family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<header
    class="flex justify-between md:justify-around items-center py-4 px-8 md:px-0 max-w-7xl mx-auto bg-Creme h-[81px]"
    x-data="{ openMenu: false }" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">
    <!-- Logo -->
    <a href="/">
        <img class="" src="{{ Vite::asset('public/images/LOGO-PRETA.png') }}" alt="" />
    </a>
    <!-- Mobile Menu Toggle -->
    <button class="flex md:hidden flex-col items-center align-middle mobile-menu" @click="openMenu = !openMenu"
        :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Navigation Menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    <!-- Main Navigations -->
    <nav class="hidden md:flex hidden-menu">
        <ul class="flex flex-row gap-2 items-center" id="menu">
            <li>
                <a href="/home"
                    class="place-content-center text-[15px] inline-flex text-CinzaClaro bg-transparent text-base border-2 rounded-new border-CinzaClaro hover:border-white
                    hover:bg-gradient-to-r hover:from-Laranja hover:to-Azul hover:text-white uppercase w-18"
                    style="padding: 4px 10px;">
                    Home</a>
            </li>
            <li>
                <a href="/sobre"
                    class="place-content-center text-[15px] inline-flex  text-CinzaClaro bg-transparent text-base border-2 rounded-new border-CinzaClaro hover:border-white
                    hover:bg-gradient-to-r hover:from-Laranja hover:to-Azul hover:text-white uppercase w-18"
                    style="padding: 4px 10px;">
                    sobre</a>
            </li>
            <li>
                <a href="/cursos-e-workshops"
                    class="place-content-center text-[15px] inline-flex  text-CinzaClaro bg-transparent text-base border-2 rounded-new border-CinzaClaro hover:border-white
                    hover:bg-gradient-to-r hover:from-Laranja hover:to-Azul hover:text-white uppercase w-auto"
                    style="padding: 4px 10px;">
                    cursos e whokshops</a>
            </li>
            <li>
                <a href="/newsletter"
                    class="place-content-cente inline-flex  text-CinzaClaro bg-transparent text-base border-2 rounded-new border-CinzaClaro hover:border-white
                    hover:bg-gradient-to-r hover:from-Laranja hover:to-Azul hover:text-white uppercase w-32"
                    style="padding: 4px 10px;">
                    newsletter</a>
            </li>
            <li>
                <a href="/contato"
                    class="place-content-center text-[15px] inline-flex text-CinzaClaro bg-transparent text-base border-2 rounded-new border-CinzaClaro hover:border-white
                    hover:bg-gradient-to-r hover:from-Laranja hover:to-Azul hover:text-white uppercase w-[101px]"
                    style="padding: 4px 10px;">
                    contato</a>
            </li>
            <li class="px-8">
                <div id="weglot_here"></div>
            </li>
            <div class="flex pointer">
                <a class="pointer"
                    href="https://www.instagram.com/institutoperiaktos/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">
                    <div class="svg-container">
                        <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 55 55" fill="none">
                            <g clip-path="url(#clip0_15_10)">
                                <path
                                    d="M27.11 54.23C12.16 54.23 0 42.07 0 27.11C0 12.15 12.16 0 27.11 0C42.06 0 54.22 12.16 54.22 27.11C54.22 42.06 42.06 54.22 27.11 54.22V54.23ZM36.25 16.11C35.14 16.11 34.24 17.01 34.24 18.12C34.24 19.23 35.14 20.13 36.25 20.13C37.36 20.13 38.26 19.23 38.26 18.12C38.26 17.01 37.36 16.11 36.25 16.11ZM27.33 18.68C22.68 18.68 18.9 22.46 18.9 27.11C18.9 31.76 22.68 35.54 27.33 35.54C31.98 35.54 35.76 31.76 35.76 27.11C35.76 22.46 31.98 18.68 27.33 18.68ZM27.33 32.51C24.35 32.51 21.93 30.09 21.93 27.11C21.93 24.13 24.35 21.71 27.33 21.71C30.31 21.71 32.73 24.13 32.73 27.11C32.73 30.09 30.31 32.51 27.33 32.51ZM44.34 20.11C44.34 14.43 39.74 9.83 34.06 9.83H20.49C14.81 9.83 10.21 14.43 10.21 20.11V33.68C10.21 39.36 14.81 43.96 20.49 43.96H34.06C39.74 43.96 44.34 39.36 44.34 33.68V20.11ZM41.12 33.68C41.12 37.58 37.96 40.74 34.06 40.74H20.49C16.59 40.74 13.43 37.58 13.43 33.68V20.11C13.43 16.21 16.59 13.05 20.49 13.05H34.06C37.96 13.05 41.12 16.21 41.12 20.11V33.68Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_15_10">
                                    <rect width="55" height="55" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="svg-container">
                            <svg id="svg2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                viewBox="0 0 55 55" fill="none">
                                <g clip-path="url(#clip0_15_12)">
                                    <path
                                        d="M27.11 54.46C12.16 54.46 0 42.3 0 27.34C0 12.38 12.16 0.22998 27.11 0.22998C42.06 0.22998 54.22 12.39 54.22 27.34C54.22 42.29 42.06 54.45 27.11 54.45V54.46ZM36.25 16.34C35.14 16.34 34.24 17.24 34.24 18.35C34.24 19.46 35.14 20.36 36.25 20.36C37.36 20.36 38.26 19.46 38.26 18.35C38.26 17.24 37.36 16.34 36.25 16.34ZM27.33 18.91C22.68 18.91 18.9 22.69 18.9 27.34C18.9 31.99 22.68 35.77 27.33 35.77C31.98 35.77 35.76 31.99 35.76 27.34C35.76 22.69 31.98 18.91 27.33 18.91ZM27.33 32.74C24.35 32.74 21.93 30.32 21.93 27.34C21.93 24.36 24.35 21.94 27.33 21.94C30.31 21.94 32.73 24.36 32.73 27.34C32.73 30.32 30.31 32.74 27.33 32.74ZM44.34 20.34C44.34 14.66 39.74 10.06 34.06 10.06H20.49C14.81 10.06 10.21 14.66 10.21 20.34V33.91C10.21 39.59 14.81 44.19 20.49 44.19H34.06C39.74 44.19 44.34 39.59 44.34 33.91V20.34ZM41.12 33.91C41.12 37.81 37.96 40.97 34.06 40.97H20.49C16.59 40.97 13.43 37.81 13.43 33.91V20.34C13.43 16.44 16.59 13.28 20.49 13.28H34.06C37.96 13.28 41.12 16.44 41.12 20.34V33.91Z"
                                        fill="url(#paint0_linear_15_12)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_15_12" x1="12" y1="8.93646e-07"
                                        x2="42" y2="48.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#EE8038" />
                                        <stop offset="1" stop-color="#1F446F" />
                                    </linearGradient>
                                    <clipPath id="clip0_15_12">
                                        <rect width="55" height="55" fill="white"
                                            transform="translate(0 0.22998)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <div class="flex pointer">
                <a href="https://www.youtube.com/channel/UCuhuyT9mVfEOF-30meYubDw">
                    <div class="svg-container">
                        <img id="svg1" class="w-[25px] h-[25px]"
                            src="{{ Vite::asset('public/images/youtube.svg') }}" alt="">
                        <div class="svg-container">
                            <img id="svg2" class="w-[25px] h-[25px]"
                                src="{{ Vite::asset('public/images/youtube2.svg') }}" alt="">
                        </div>
                    </div>
                </a>
            </div>

            <div class="flex pointer">
                <a href="mailto:contato@institutoperiaktos.com.br">
                    <div class="svg-container">
                        <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 54 54" fill="none">
                            <g clip-path="url(#clip0_193_20058)">
                                <path
                                    d="M26.9951 54C12.1077 54 0 41.8901 0 27C0 12.1099 12.1077 0 26.9951 0C41.8824 0 53.9901 12.1099 53.9901 27C53.9901 41.8901 41.8824 54 26.9951 54Z"
                                    fill="black" />
                                <path
                                    d="M38.6477 15.9689H15.3523C13.8289 15.9689 12.5924 17.2056 12.5924 18.7292V35.2913C12.5924 36.815 13.8289 38.0517 15.3523 38.0517H38.6477C40.1711 38.0517 41.4076 36.815 41.4076 35.2913V18.7193C41.4076 17.1957 40.1711 15.959 38.6477 15.959V15.9689ZM37.6388 18.1752L27.0544 28.7615L16.3711 18.1752H37.6388ZM14.7983 34.2822V19.7186L22.1084 26.9707L14.7983 34.2822ZM16.3612 35.8454L23.6813 28.524L26.2828 31.1063C26.7181 31.5317 27.4105 31.5317 27.8359 31.1063L30.3682 28.5735L37.6388 35.8454H16.3612ZM39.2017 34.2822L31.9311 27.0103L39.2017 19.7384V34.2921V34.2822Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_193_20058">
                                    <rect width="54" height="54" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="svg-container">
                            <svg id="svg2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                viewBox="0 0 54 54" fill="none">
                                <g clip-path="url(#clip0_193_20060)">
                                    <path
                                        d="M26.9951 54C12.1077 54 0 41.8901 0 27C0 12.1099 12.1077 0 26.9951 0C41.8824 0 53.9901 12.1099 53.9901 27C53.9901 41.8901 41.8824 54 26.9951 54Z"
                                        fill="url(#paint0_linear_193_20060)" />
                                    <path
                                        d="M38.6477 15.9689H15.3523C13.8289 15.9689 12.5924 17.2056 12.5924 18.7292V35.2913C12.5924 36.815 13.8289 38.0517 15.3523 38.0517H38.6477C40.1711 38.0517 41.4076 36.815 41.4076 35.2913V18.7193C41.4076 17.1957 40.1711 15.959 38.6477 15.959V15.9689ZM37.6388 18.1752L27.0544 28.7615L16.3711 18.1752H37.6388ZM14.7983 34.2822V19.7186L22.1084 26.9707L14.7983 34.2822ZM16.3612 35.8454L23.6813 28.524L26.2828 31.1063C26.7181 31.5317 27.4105 31.5317 27.8359 31.1063L30.3682 28.5735L37.6388 35.8454H16.3612ZM39.2017 34.2822L31.9311 27.0103L39.2017 19.7384V34.2921V34.2822Z"
                                        fill="#F6F3ED" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_193_20060" x1="14.5" y1="2.5"
                                        x2="42.5" y2="44.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#EE8038" />
                                        <stop offset="1" stop-color="#1F446F" />
                                    </linearGradient>
                                    <clipPath id="clip0_193_20060">
                                        <rect width="54" height="54" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <div class="flex pointer">
                <a href="https://wa.link/gr6l7f">
                    <div class="svg-container">
                        <img id="svg1" class="w-[25px] h-[25px]"
                            src="{{ Vite::asset('public/images/whats.svg') }}" alt="">
                        <div class="svg-container">
                            <img id="svg2" class="w-[25px] h-[25px]"
                                src="{{ Vite::asset('public/images/whats2.png') }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </ul>
    </nav>

    <!-- Pop Out Navigation -->
    <nav id="mobile-navigation"
        class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-[999999999999999!important] overflow-auto"
        x-cloak x-show="openMenu" x-transition.opacity>
        <!-- UL Links -->
        <ul class="absolute top-0 right-0 bottom-0 w-10/12 py-4 bg-Creme drop-shadow-2xl z-[9999999999999999] transition-all"
            :class="openMenu ? 'translate-x-0' : 'translate-x-full'">

            <li class="border-b border-inherit">
                <a href="/home" class="block p-4 text-CinzaClaro uppercase">home</a>
            </li>
            <li class="border-b border-inherit">
                <a href="/sobre" class="block p-4 text-CinzaClaro uppercase">sobre</a>
            </li>
            <li class="border-b border-inherit">
                <a href="/cursos-e-workshops" class="block p-4 text-CinzaClaro uppercase">cursos e whokshops</a>
            </li>
            <li class="border-b border-inherit">
                <a href="/newsletter" class="block p-4 text-CinzaClaro uppercase">newsletter</a>
            </li>
            <li class="border-b border-inherit">
                <a href="/contato" class="block p-4 text-CinzaClaro uppercase">contato</a>
            </li>
            <li class="pl-12">
                <div id="weglot_here"></div>
            </li>
            <div class="flex justify-around pt-8">
                <div class="flex">
                    <a class="pointer"
                        href="https://www.instagram.com/institutoperiaktos/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">
                        <div class="svg-container">
                            <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                viewBox="0 0 55 55" fill="none">
                                <g clip-path="url(#clip0_15_10)">
                                    <path
                                        d="M27.11 54.23C12.16 54.23 0 42.07 0 27.11C0 12.15 12.16 0 27.11 0C42.06 0 54.22 12.16 54.22 27.11C54.22 42.06 42.06 54.22 27.11 54.22V54.23ZM36.25 16.11C35.14 16.11 34.24 17.01 34.24 18.12C34.24 19.23 35.14 20.13 36.25 20.13C37.36 20.13 38.26 19.23 38.26 18.12C38.26 17.01 37.36 16.11 36.25 16.11ZM27.33 18.68C22.68 18.68 18.9 22.46 18.9 27.11C18.9 31.76 22.68 35.54 27.33 35.54C31.98 35.54 35.76 31.76 35.76 27.11C35.76 22.46 31.98 18.68 27.33 18.68ZM27.33 32.51C24.35 32.51 21.93 30.09 21.93 27.11C21.93 24.13 24.35 21.71 27.33 21.71C30.31 21.71 32.73 24.13 32.73 27.11C32.73 30.09 30.31 32.51 27.33 32.51ZM44.34 20.11C44.34 14.43 39.74 9.83 34.06 9.83H20.49C14.81 9.83 10.21 14.43 10.21 20.11V33.68C10.21 39.36 14.81 43.96 20.49 43.96H34.06C39.74 43.96 44.34 39.36 44.34 33.68V20.11ZM41.12 33.68C41.12 37.58 37.96 40.74 34.06 40.74H20.49C16.59 40.74 13.43 37.58 13.43 33.68V20.11C13.43 16.21 16.59 13.05 20.49 13.05H34.06C37.96 13.05 41.12 16.21 41.12 20.11V33.68Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_15_10">
                                        <rect width="55" height="55" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="svg-container">
                                <svg id="svg2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 55 55" fill="none">
                                    <g clip-path="url(#clip0_15_12)">
                                        <path
                                            d="M27.11 54.46C12.16 54.46 0 42.3 0 27.34C0 12.38 12.16 0.22998 27.11 0.22998C42.06 0.22998 54.22 12.39 54.22 27.34C54.22 42.29 42.06 54.45 27.11 54.45V54.46ZM36.25 16.34C35.14 16.34 34.24 17.24 34.24 18.35C34.24 19.46 35.14 20.36 36.25 20.36C37.36 20.36 38.26 19.46 38.26 18.35C38.26 17.24 37.36 16.34 36.25 16.34ZM27.33 18.91C22.68 18.91 18.9 22.69 18.9 27.34C18.9 31.99 22.68 35.77 27.33 35.77C31.98 35.77 35.76 31.99 35.76 27.34C35.76 22.69 31.98 18.91 27.33 18.91ZM27.33 32.74C24.35 32.74 21.93 30.32 21.93 27.34C21.93 24.36 24.35 21.94 27.33 21.94C30.31 21.94 32.73 24.36 32.73 27.34C32.73 30.32 30.31 32.74 27.33 32.74ZM44.34 20.34C44.34 14.66 39.74 10.06 34.06 10.06H20.49C14.81 10.06 10.21 14.66 10.21 20.34V33.91C10.21 39.59 14.81 44.19 20.49 44.19H34.06C39.74 44.19 44.34 39.59 44.34 33.91V20.34ZM41.12 33.91C41.12 37.81 37.96 40.97 34.06 40.97H20.49C16.59 40.97 13.43 37.81 13.43 33.91V20.34C13.43 16.44 16.59 13.28 20.49 13.28H34.06C37.96 13.28 41.12 16.44 41.12 20.34V33.91Z"
                                            fill="url(#paint0_linear_15_12)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_15_12" x1="12" y1="8.93646e-07"
                                            x2="42" y2="48.5" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#EE8038" />
                                            <stop offset="1" stop-color="#1F446F" />
                                        </linearGradient>
                                        <clipPath id="clip0_15_12">
                                            <rect width="55" height="55" fill="white"
                                                transform="translate(0 0.22998)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex pointer">
                    <a href="https://www.youtube.com/channel/UCuhuyT9mVfEOF-30meYubDw">
                        <div class="svg-container">
                            <img id="svg1" class="w-[25px] h-[25px]"
                                src="{{ Vite::asset('public/images/youtube.svg') }}" alt="">
                            <div class="svg-container">
                                <img id="svg2" class="w-[25px] h-[25px]"
                                    src="{{ Vite::asset('public/images/youtube2.svg') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex pointer">
                    <a href="mailto:contato@institutoperiaktos.com.br">
                        <div class="svg-container">
                            <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                viewBox="0 0 54 54" fill="none">
                                <g clip-path="url(#clip0_193_20058)">
                                    <path
                                        d="M26.9951 54C12.1077 54 0 41.8901 0 27C0 12.1099 12.1077 0 26.9951 0C41.8824 0 53.9901 12.1099 53.9901 27C53.9901 41.8901 41.8824 54 26.9951 54Z"
                                        fill="black" />
                                    <path
                                        d="M38.6477 15.9689H15.3523C13.8289 15.9689 12.5924 17.2056 12.5924 18.7292V35.2913C12.5924 36.815 13.8289 38.0517 15.3523 38.0517H38.6477C40.1711 38.0517 41.4076 36.815 41.4076 35.2913V18.7193C41.4076 17.1957 40.1711 15.959 38.6477 15.959V15.9689ZM37.6388 18.1752L27.0544 28.7615L16.3711 18.1752H37.6388ZM14.7983 34.2822V19.7186L22.1084 26.9707L14.7983 34.2822ZM16.3612 35.8454L23.6813 28.524L26.2828 31.1063C26.7181 31.5317 27.4105 31.5317 27.8359 31.1063L30.3682 28.5735L37.6388 35.8454H16.3612ZM39.2017 34.2822L31.9311 27.0103L39.2017 19.7384V34.2921V34.2822Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_193_20058">
                                        <rect width="54" height="54" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="svg-container">
                                <svg id="svg2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 54 54" fill="none">
                                    <g clip-path="url(#clip0_193_20060)">
                                        <path
                                            d="M26.9951 54C12.1077 54 0 41.8901 0 27C0 12.1099 12.1077 0 26.9951 0C41.8824 0 53.9901 12.1099 53.9901 27C53.9901 41.8901 41.8824 54 26.9951 54Z"
                                            fill="url(#paint0_linear_193_20060)" />
                                        <path
                                            d="M38.6477 15.9689H15.3523C13.8289 15.9689 12.5924 17.2056 12.5924 18.7292V35.2913C12.5924 36.815 13.8289 38.0517 15.3523 38.0517H38.6477C40.1711 38.0517 41.4076 36.815 41.4076 35.2913V18.7193C41.4076 17.1957 40.1711 15.959 38.6477 15.959V15.9689ZM37.6388 18.1752L27.0544 28.7615L16.3711 18.1752H37.6388ZM14.7983 34.2822V19.7186L22.1084 26.9707L14.7983 34.2822ZM16.3612 35.8454L23.6813 28.524L26.2828 31.1063C26.7181 31.5317 27.4105 31.5317 27.8359 31.1063L30.3682 28.5735L37.6388 35.8454H16.3612ZM39.2017 34.2822L31.9311 27.0103L39.2017 19.7384V34.2921V34.2822Z"
                                            fill="#F6F3ED" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_193_20060" x1="14.5" y1="2.5"
                                            x2="42.5" y2="44.5" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#EE8038" />
                                            <stop offset="1" stop-color="#1F446F" />
                                        </linearGradient>
                                        <clipPath id="clip0_193_20060">
                                            <rect width="54" height="54" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex pointer">
                    <a href="https://wa.link/gr6l7f">
                        <div class="svg-container">
                            <img id="svg1" class="w-[25px] h-[25px]"
                                src="{{ Vite::asset('public/images/whats.svg') }}" alt="">
                            <div class="svg-container">
                                <img id="svg2" class="w-[25px] h-[25px]"
                                    src="{{ Vite::asset('public/images/whats2.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
        </ul>
        <!-- Close Button -->
        <button class="absolute top-0 right-0 bottom-0 left-0" @click="openMenu = !openMenu" :aria-expanded="openMenu"
            aria-controls="mobile-navigation" aria-label="Close Navigation Menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 left-2" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>
</header>

<body>
    {{ $slot }}
</body>

</html>
