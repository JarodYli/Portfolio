<template>
    <div>
                <input 
                type="checkbox" @click="ja"
                >{{item}}<br>
    </div>
</template>

<script>
    export default {

        data(){
            return{
                j:this.checked,
            }
        },

        props: {
            item:String,
            checked:Boolean,
        },

        methods: {

            ja(){
                this.j = !this.j;
                this.$emit("clicked", {value: this.j, item: this.item})
            }
        }
        
    }
</script>

<style>

</style>