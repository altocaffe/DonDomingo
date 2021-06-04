<?php

namespace App\Http\Requests;

use App\Models\Producto;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo' => 'required|min:3|string',
            'name' => 'required|min:3|string',
            'descripcion' => 'required|min:3|string',
            'talle' => 'required|min:3|string',
            'foto' => 'required|image',
            'precio' => 'required|min:0|numeric',
        ];
    }

    public function commit()
    {
        $url = $this->file('foto')->store('public');
        $producto = new Producto();
        $producto->codigo = $this->input('codigo');
        $producto->name = $this->input('descripcion');
        $producto->talle = $this->input('talle');
        $producto->precio = $this->input('precio');
        $producto->url = $url;
        $producto->save();
        return $producto;
    }
}
