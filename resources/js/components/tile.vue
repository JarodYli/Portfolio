<template>
    <div>
        <div @click="onClickTile">
        <div class="tile"><img :src="image" width="20" height="20" ></div>
        
        </div>
    </div>

</template>

<script>
export default {
    name: "tile",
    props:{
        colId:Number,
        rowId:Number,
        turn:Number,
    },

    data () {
        return {
            status: "hey",

            
            image: '/images/blank.png',
        };
    },
    methods: {
        onClickTile() {

            //as long as image is not blank no token can be placed.
            if(this.image != '/images/blank.png'){
                console.log("place taken")
            }
            else{
                if(this.turn%2 == 0){
                    console.log("X");
                    this.image = '/images/Xs.png';
                }
                else if (this.turn%2 == 1){
                    this.image = '/images/Os.png';
                }
                this.status = 0;

                this.$emit("onClickedTile", {rowId: this.rowId, colId: this.colId})
            }
        }
    }
}

</script>