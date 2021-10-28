<template>
    <div class="bg-white shadow-lg hover:shadow-xl rounded-lg ">
        <div class="bg-gray-400 h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover"
        :style="backgroundImage">

        </div>
        <div class="flex justify-between items-start px-2 pt-2">
            <div class="p-2 flex-grow">
                <h1 class="font-medium text-xl font-poppins" v-text="producto.name"></h1>
                <p class="text-gray-500 font-nunito">{{producto.descripcion}}</p>
            </div>
            <div class="p-2 text-right">
                <div
                    class="text-teal-500 font-semibold text-lg font-poppins">{{producto.precio}}</div>
            </div>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2">Talle</label>
            <select v-model="talle" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option v-for="talle in this.producto.talles_disponibles" v-text="talle">
            </option>
            </select>
        </div>
        <div>
            <label class="">Cantidad</label>
            <input type="number" v-model="cantidad">

        </div>

        <div class="flex justify-center items-start px-2 pb-2">
            <div class="w-1/2 p-2">
                <button
                    class="block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium">
                    <b>Comprar</b>
                </button>
            </div>
            <div class="w-1/2 p-2">
                <button @click="agregarAlCarrito"
                    class="block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-3 py-2 rounded uppercase font-poppins font-medium">
                    <b>Agregar al carrito</b>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Producto",
        props: {
            producto: {
                required: true,
                type: Object
            },
            imagen: {
                required: true,
                type: String
            }
        },
        data(){
            return {
                backgroundImage: ` background-image: url(${this.imagen})`,
                cantidad: 0,
                talle: ""
            }
        },
        methods: {
            agregarAlCarrito(){
                let compra = {
                    cantidad: this.cantidad,
                    talle: this.talle,
                    precio: this.producto.precio,
                    nombre: this.producto.name
                };
                this.$store.commit('agregarAlCarrito' ,compra);
                location.href = "/"
            }
        }

    }
</script>

<style scoped>

</style>
