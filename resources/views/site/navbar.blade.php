<div>
    <img
        src="https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-purple-ray-light-strip-minimalist-banner-background-image_210030.jpg"
        class="object-center h-48 w-full">
</div>


<nav x-data="{show:false}"
     class="border-blue-200 flex items-center bg-gradient-to-r from-black via-gray-50 to-black p-6">



   {{-- <div class="flex items-center flex-shrink-0 text-white mr-6">
        <svg class="stroke-current text-purple-600 h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/>
        </svg>
        <span class="font-semibold text-xl tracking-tight"><i>DON DOMINGO</i></span>
    </div>--}}
    <div class="block md:hidden">
        <button
                class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-200 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
    <div class="w-full block flex-grow md:flex md:justify-between md:w-auto">
        <carrito></carrito>

        <div>
            <a href="{{action('TiendaController@index')}}"
               class="text-xl text-left tracking-tight  px-4 py-2 rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-black mt-4 md:mt-0">Productos</a>

            <a href="{{action('TiendaController@nosotros')}}"
               class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-black mt-4 md:mt-0">Nosotros</a>

            <a href="{{action('TiendaController@contacto')}}"
               class="block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-black mt-4 md:mt-0">Contacto</a>
        </div>
    </div>
</nav>
