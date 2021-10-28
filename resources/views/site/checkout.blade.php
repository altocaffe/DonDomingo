@extends('layouts.checkout')
@section('content')
    <div class="min-h-screen bg-gray-300">
        <div class="container mx-auto p-10 max-w-screen-lg">
            <div class="bg-white rounded shadow p-8">
                <!--  ToastBar  -->

                <!-- Order Summary  -->
                <div>
                    <h3 class="text-xl mt-4 font-bold mb-3">Resumen del Pedido</h3>
                    <!--     BOX     -->

                    @foreach($carrito as $compra)
                        <div class="border w-full rounded flex p-4 justify-between items-center mb-2">
                            <img src="{{\App\Models\Producto::where('name', $compra['nombre'])->first()->url}}"
                                 class="w-12">
                            <div class="w-2/3">
                                <h3 class="text-lg font-medium">{{$compra['nombre']}}</h3>
                                <p class="text-gray-600 text-xs">Cantidad: <b>{{$compra['cantidad']}}</b></p>
                            </div>
                            <div>
                                <h4 class="text-3xl font-medium">
                                    $ {{number_format($compra['precio']* $compra['cantidad'], 2, ".",".")}}</h4>
                                @if($compra['cantidad'] > 1 )
                                    <p class="text-gray-600 text-xs">Precio x cantidad:</p>
                                    <p class="text-gray-600 text-xs">{{$compra['precio']}}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="flex justify-between mt-8 flex-wrap lg:justify-center">
                    <div class="bg-white rounded shadow p-2 w-full lg:w-2/4">
                        <div class="w-full bg-orange-200 px-8 py-6">
                            <h3 class="text-2xl mt-4 font-bold"></h3>
                            <div class="flex justify-between mt-3">

                            </div>
                            <div class="bg-orange-300 h-1 w-full mt-3"></div>
                            <div class="flex justify-between mt-3">
                                <div class="text-xl text-orange-900 font-bold">Total</div>
                                <div class="text-2xl text-orange-900 font-bold">
                                    ${{number_format($total,2, ".",".")}}</div>
                            </div>
                            <div
                                class="px-4 py-4 w-full mt-3 btn-pagar">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        @section('scripts')
            <script type="text/javascript">
                // Agrega credenciales de SDK
                const mp = new MercadoPago("{{env('MP_PUBLIC_KEY')}}", {
                    locale: 'es-AR'
                });
                mp.checkout({
                    preference: {
                        id: "{{$preference->id}}"
                    },
                    render: {
                        container: '.btn-pagar', // Indica el nombre de la clase donde se mostrará el botón de pago
                        label: 'Pagar', // Cambia el texto del botón de pago (opcional)
                    }
                });
            </script>
@endsection

