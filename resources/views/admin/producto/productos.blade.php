@extends('layouts.app')
@section('content')
    <div class="container">

        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right" href="{{ action('Admin\ProductoController@showForm')}}">CREAR PRODUCTO +</a>

        <br>
    </div>

    @include('components.tablaProductos')



@endsection
