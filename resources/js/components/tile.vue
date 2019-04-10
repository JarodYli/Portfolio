<template>
    <div>
        <div @click="onClickTile">
        <div class="tile"><img class="mx-auto d-block" :src="image" width="20" height="20" ></div>
        
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
            
            if(this.turn%2 == 0){
                this.image = '/images/Xs.png';
            }
            else{
                this.image = '/images/Os.png';
            }
            this.status = 0;

            this.$emit("onClickedTile", {rowId: this.rowId, colId: this.colId})
        }
    }
}
</script>