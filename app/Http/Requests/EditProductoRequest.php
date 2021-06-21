<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->producto = $this->route('producto');
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
            'codigo' => "required|min:3|string",
            'name' => 'required|min:3|string',
            'descripcion' => 'required|min:3|string',
            'talles_disponibles' => 'required|array',
            'foto' => 'image',
            'precio' => 'required|min:0|numeric',
        ];
    }

    public function commit()
    {
        $this->producto->codigo = $this->input('codigo');
        $this->producto->name = $this->input('name');
        $this->producto->descripcion = $this->input('descripcion');
        $this->producto->talles_disponibles = $this->input('talles_disponibles');
        $this->producto->precio = $this->input('precio');
        if ($this->has('foto')){
            Storage::delete($this->producto->url);
            $url = $this->file('foto')->store('public');
            $this->producto->url = str_replace("public", "storage", $url);
        }
        $this->producto->save();
        return $this->producto;
    }
}
