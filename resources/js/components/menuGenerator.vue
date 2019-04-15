<template>
    <div>
                <div class="container">
                    <div class="row">
                        <div class="col"  v-for="i in sections" :key="i">
                            <a>{{i}}</a>
                            {{info}}
                        </div>

                    </div>
                </div>

                        
    </div>
</template>

<script>
    export default {

        data(){
            return{
                info: null,

                sections: ["Breakfast", "Lunch", "Dinner", "Desert"],



            }
        },

        mounted(){
            axios
                .get('https://entree-f18.herokuapp.com/v1/menu/8')
                .then(response => (this.info = response.data))
        },
        
    }
</script>

<style>

</style>