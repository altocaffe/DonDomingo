<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use MercadoPago\Item;
use MercadoPago\Preference;
use MercadoPago\SDK;
class TiendaController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('welcome', compact('productos'));
    }

    public function producto(Producto $producto)
    {
        return view('producto', compact('producto'));
    }

    public function nosotros()
    {
        return view('site.nosotros');
    }

    public function contacto()
    {
        return view('site.contacto');
    }

    public function checkout(Request $request)
    {
        $carrito = $request->carrito;
        SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
        $preference = new Preference();
        $items = [];
        $total = 0;
        foreach ($carrito as $compra){
            $item = new Item();
            $item->title = $compra['nombre'];
            $item->quantity  = $compra['cantidad'];
            $item->unit_price  = $compra['precio'];
            $items[] = $item;
            $total += $compra['precio'] * $compra['cantidad'];
        }
        $preference->items = $items;
        $preference->save();
        return view('site.checkout', compact('preference', 'carrito', 'total'));
    }
}
