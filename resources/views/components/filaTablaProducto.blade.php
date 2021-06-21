<tr>

    <th>{{$producto->codigo}}</th>

    <th>{{$producto->name}}</th>

    <th>{{$producto->descripcion}}</th>

    <th>@foreach($producto->talles_disponibles as $talle){{$talle}} | @endforeach</th>

    <th>{{$producto->precio}}</th>

    <th><img src="{{ asset($producto->url)}}" width="200"></th>

    <th>
        <form method="post" action="{{action('Admin\ProductoController@delete', $producto)}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-dark">Borrar</button>
        </form>
    <th>
        <a href="{{action('Admin\ProductoController@show', $producto)}}" class="btn btn-danger">Editar</a>
    </th>

</tr>



