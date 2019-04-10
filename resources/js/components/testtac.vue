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
      <button>Play the game</button>
    </div>
  </div>
</template>


<script>
import tile from "./tile"

export default {

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
      image: '/images/Os.png',

      turn:0,
      
      

    };
  },

  mounted() {
    this.drawBoard();

  },

 

  methods: {
    drawBoard() {
      this.board = "dscknclsk";
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
