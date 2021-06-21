<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BorrarProductoRequest;
use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\EditProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('admin.producto.productos', compact('productos'));
    }

    public function showForm()
    {
        return view('admin.producto.createProducto');
    }

    public function create(CreateProductoRequest $request)
    {
        $producto = $request->commit();
        return redirect()->action('Admin\ProductoController@index');
    }

    public function delete(BorrarProductoRequest $request, Producto $producto)
    {
        $request->commit();
        return redirect()->back();
    }

    public function show(Producto $producto)
    {
        return view('admin.producto.producto', compact('producto'));
    }

    public function edit(EditProductoRequest $request, Producto $producto)
    {
        $request->commit();
        return redirect()->action('Admin\ProductoController@index');
    }
}
