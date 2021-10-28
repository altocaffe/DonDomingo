<div class="bg-white m-5 shadow-lg hover:shadow-xl rounded-lg ">

    <a href="{{action('TiendaController@producto', $producto)}}"
       class="block w-full bg-white hover:bg-gray-100 text-teal-500  px-3 py-2 rounded uppercase font-poppins font-medium">

        <div class="bg-gray-200 h-96 rounded-t-lg p-4 bg-center bg-cover"
             style="background-image: url({{ asset($producto->url)}})">
        </div>

        <div class="flex justify-between items-start ">
            <div class="p-2 flex-grow">
                <h1 class="font- text-xl text-left font-poppins">{{$producto->name}}</h1>
                <p class="text-gray-500 text-left font-nunito">{{$producto->descripcion}}</p>
            </div>
            <div class="p-2 text-right">
                <div class="text-teal-500 font-semibold text-xl font-poppins">${{$producto->precio}}</div>
            </div>
        </div>
    </a>
</div>
