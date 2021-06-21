@extends('layouts.app')
@section('content')

    <div class="container">
        <form method="post" action="{{action('Admin\ProductoController@create')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <label for="codigo"><b>Codigo</b></label>
                <input type="number" name="codigo"
                       class="form-control @error('codigo') is-invalid @enderror" required>

                @error('codigo')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">

                <label for="name"><b>Nombre</b></label>
                <input type="text" name="name"
                       class="form-control @error('name') is-invalid @enderror" required>

                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <div class="form-group">

                <label for="descripcion"><b>Descripcion</b></label>
                <input type="text" name="descripcion"
                       class="form-control @error('descripcion') is-invalid @enderror" required>

                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">

                <label for="talles_disponibles"><b>Talles disponibles</b></label> <br>

                <input type="checkbox" value="S" name="talles_disponibles[]"> <b>S</b>
                <input type="checkbox" value="M" name="talles_disponibles[]"> <b>M</b>
                <input type="checkbox" value="L" name="talles_disponibles[]"> <b>L</b>
                <input type="checkbox" value="XL" name="talles_disponibles[]"> <b>XL</b>



                @error('talles_disponibles')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="form-group">

                <label for="precio"><b>Precio</b></label>
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

                    <input type="file" class="custom-file-input" name="foto" accept="image/x-png,image/gif,image/jpeg" required >
                    <label class="custom-file-label" for="customFile" >Elegir foto</label>
                </div>

                @error('foto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-lg btn-primary">Crear Producto</button>

        </form>

    </div>



@endsection
