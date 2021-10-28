import createPersistedState from "vuex-persistedstate";
export default {
    plugins: [createPersistedState({
        storage: window.sessionStorage
    })],
    state: {
        carrito: []
    },
    mutations: {
        agregarAlCarrito (state, compra) {
            state.carrito.push(compra);
        },
        sacarItem (state, item) {
            state.carrito.splice(item, 1);
        }
    }
}
