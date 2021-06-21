<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th> Codigo</th>
            <th> Nombre</th>
            <th> Descripcion</th>
            <th> Talles Disponibles</th>
            <th> Precio</th>
            <th> Foto</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            @component('components.filaTablaProducto', ['producto'=>$producto])
            @endcomponent
        @endforeach
        </tbody>
    </table>
</div>



