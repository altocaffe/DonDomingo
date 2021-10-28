<template>
    <div>
        <button v-on:click="increment" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">
            Increment
        </button>
    </div>
</template>

<script>
    export default {
        name: "IncrementButton",
        data(){
            return {
                count: 0
            }
        },
       methods: {
            increment(){
                this.count += 1;
                this.$store.commit('increment');
                console.log(this.$store.state.count, this.count);
            }
       }
    }
</script>

<style scoped>

</style>
