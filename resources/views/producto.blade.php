@extends('layouts.site')
@section('title', $producto->name)
@section('content')



    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-center items-center  bg-gray-100">
                    <div class="w-full md:w-1/3 p-2">
                       <producto :producto="{{json_encode($producto)}}" imagen="{{asset($producto->url)}}"></producto>
                    </div>
                </div>
            </div>
            <div id="summary" class="w-1/4 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Pedido</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <h1 class="font-medium text-xl font-poppins">Producto: {{$producto->name}}</h1>
                </div>
                <div>
                    <label class="font-medium inline-block mb-3 text-sm uppercase">Envio</label>
                    <select class="block p-2 text-gray-600 w-full text-sm">
                        <option>Envio estandar - $300.00</option>
                    </select>
                </div>
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>TOTAL</span>
                        <span>{{$producto->precio}}</span>
                    </div>
                    <button
                        class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
                        COMPRAR
                    </button>
                </div>
            </div>

        </div>
    </div>

@endsection
