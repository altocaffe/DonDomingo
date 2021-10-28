@extends('layouts.site')
@section('title', 'Don Domingo')
@section('content')
    <section class="bg-gray-200">
        <div class="container mx-auto px-6 py-10">

            <h2 class="text-2xl font-mono text-gray-800 mb-8">
            </h2>

            <h1>
          </h1>

            <div class="grid grid-cols-3 gap-x-11 bg-gray-100">
                @foreach($productos as $producto)
                    @component('components.productCard', ['producto' => $producto])
                    @endcomponent
                @endforeach
            </div>
        </div>

    </section>

@endsection


