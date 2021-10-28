<template>
    <div class="mt-2.5">
        <button @click="toggleShow"
                :class="carrito.length > 0 ? 'text-indigo-700' : ''"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-1 px-4 border border-gray-400 rounded shadow">
            <font-awesome-icon icon="shopping-cart"></font-awesome-icon>
            <span v-if="carrito.length > 0">{{carrito.length}}</span>
        </button>
        <div v-if="show === true && this.$store.state.carrito.length > 0" class="absolute grid-cols-1 bg-red-500 p-3 w-40 mt-3 mr-8 rounded-md">
            <div v-for="(item, index) in this.$store.state.carrito">
                <div class="flex justify-content-between">
                    <p><b>{{item.nombre}}</b></p> <a href="#" @click="sacarItem(index)">
                    <font-awesome-icon icon="trash"></font-awesome-icon>
                </a>
                </div>
            </div>
            <div class="flex justify-content-between"><span>Total</span><span> ${{total}}</span></div>
            <a href="#" @click="checkout"
                    class="block w-full bg-white hover:bg-gray-100 text-teal-500 border-2 border-teal-500 px-2 py-1 rounded uppercase font-poppins font-medium">
                Pagar
            </a>
        </div>
    </div>
</template>
<script>
    export default {
        name: "Carrito",
        data() {
            return {
                carrito: this.$store.state.carrito,
                show: false
            }
        },
        computed: {
            total() {
                let total = 0;
                this.$store.state.carrito.forEach(compra => total += this.totalPorProducto(compra));
                return total
            }
        },
        methods: {
            totalPorProducto(producto) {
                return producto.precio * producto.cantidad;
            },
            toggleShow() {
                this.show = !this.show;
            },
            sacarItem(item) {
                this.$store.commit('sacarItem', item);
            },
            checkout(){
                let params = $.param({carrito: this.$store.state.carrito});
                location.href = 'checkout?' + params;
            }
        }
    }
</script>

<style scoped>

</style>
