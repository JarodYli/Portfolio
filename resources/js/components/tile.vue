<template>
    
        <div @click="onClickTile">
                    <img class="center" :src="image" width="75" height="75">

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

            image: '/images/blank.png',
        };
    },
    methods: {
        onClickTile() {

            //as long as image is not blank no token can be placed.
            if(this.image != '/images/blank.png'){
                // console.log("place taken")
            }
            else{
                if(this.turn%2 == 0){
                    // console.log("X");
                    this.image = '/images/Xs.png';
                }
                else if (this.turn%2 == 1){
                    this.image = '/images/Os.png';
                }


                this.$emit("onClickedTile", {rowId: this.rowId, colId: this.colId})
            }
        }
    }
}

</script>

<style>
.square {
  height: 50px;
  width: 50px;

  border-color: black;
  border-style: solid;
}

.CNTR{
    text-align:center;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top:auto;
  width: 50%;
}
</style>
