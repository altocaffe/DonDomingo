@extends('layouts.app')
@section('content')

    <div class="container">

        <a class="btn btn-primary float-right" href="{{ action('Admin\ProductoController@showForm')}}"><b>CREAR PRODUCTO    +</b></a>

    </div>

@endsection
