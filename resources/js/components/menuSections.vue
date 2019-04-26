<template>
    <div class="col">
            <h1>{{id}}</h1>
            <ul v-for="items in food_str"
            :key="items">
                <li>{{items}}</li>
            </ul>
    </div>
</template>

<script>

    import menuGenerator from "./menuGenerator";

    export default {
        data(){
            
            return {
                anitem : "",
                info: null,
                food_str: [],
                mItems:[],

            }

        },

        mounted(){
            this.food();
        },

        props:{
            id: String,
        },

        methods: {

            makeMenu(){
            var num = Math.floor((Math.random() * 10) + 1);
            var self = this;
            for(var i = 0; i < num; i++){
            axios
                .get('https://cors-anywhere.herokuapp.com/' + 'https://entree-f18.herokuapp.com/v1/menu/1')
                
                .then(response => (this.info = response))
                .then(function () {
                    var anitem = "";
                        for (var item in self.info.data.menu_items) {

                            // console.log(item);
                            anitem += self.info.data.menu_items[item].description + " ";

                        }
                        console.log("ANITme:", anitem);
                        self.food_str.push(anitem);

                })
            }
            
        },

        food() {
            this.makeMenu();


            this.mItems.push(this.food_str);
            console.log(this.mItems[0]);
            return this.food_str;
    }
        }

        
    }
</script>

<style>

</style>