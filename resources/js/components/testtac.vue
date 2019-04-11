<template>
  <div>
    <h1>Tic Tac Toe</h1>

  
    <div class="container">
    <div 
      class="row"
      v-for="row in rows"
      :key="row.id"
    >
        

          <div class="col-.5 square justify-center" v-for="col in cols"
               :key="col.id">


              <tile :turn="turn" :colId="col.id" :rowId="row.id" v-on:onClickedTile="changeTile">

              </tile>
                    
          </div>
      
    </div>
    </div>

    <div>
      <button @click="whoGoes">Play the game</button>
      <!-- <button @click="reset">Reset</button> -->
    </div>
  </div>
</template>


<script>
import tile from "./tile"

export default {

  mounted() {

    this.drawBoard();

  },

  data() {
    return {

      rows: [
          {id:1, value:0}, 
          {id:2, value:0},
          {id:3, value:0}
          ],
      cols: [
          {id:1, value:0}, 
          {id:2, value:0},
          {id:3, value:0}
      ],

      turn:"not yet",
      
      

    };
  },

  

 

  methods: {

    whoGoes() {
      console.log("whogoes");
      var first = prompt("Who goes first?", "X or O");
      if(first == "X"){
        this.turn = 0;
      }
      else{
        this.turn = 1;
      }
    },

   

    

    changeTile(obj) {
      this.turn = this.turn +1;
      console.log(this.turn);
    }
    
  }
};
</script>
<style>
.square {
    height: 50px;
    width: 50px;

    border-color: black;
    border-style: solid;
  }
</style>
