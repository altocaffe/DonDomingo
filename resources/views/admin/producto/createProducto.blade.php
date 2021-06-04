@extends('layouts.app')
@section('content')

    <div class="container">
        <form method="post" action="{{action('Admin\ProductoController@create')}}">
            @csrf
        <div class="form-group">

            <label for="codigo">Codigo</label>
            <input type="text" name="codigo"
                   class="form-control @error('codigo') is-invalid @enderror" required>

            @error('codigo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

            <div class="form-group">

            <label for="name">Name</label>
            <input type="text" name="name"
                   class="form-control @error('name') is-invalid @enderror" required>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
        @enderror

    </div>
            <div class="form-group">

                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion"
                       class="form-control @error('descripcion') is-invalid @enderror" required>

                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">

                <label for="talle">Talle</label>
                <input type="text" name="talle"
                       class="form-control @error('talle') is-invalid @enderror" required>

                @error('talle')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">

                <label for="precio">Precio</label>
                <input type="number" min="0.01" step="0.01" name="precio"
                       class="form-control @error('precio') is-invalid @enderror" required>

                @error('precio')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <div class="custom-file">

                    <input type="file" class="custom-file-input" name="foto" accept="image/x-png,image/gif,image/jpeg">
                    <label class="custom-file-label" for="customFile">Choose photo</label>
                </div>

                @error('foto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-lg btn-primary" >Crear Producto</button>

        </form>

    </div>



@endsection
