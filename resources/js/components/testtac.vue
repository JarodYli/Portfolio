<template>
  <div>
    <h1>Tic Tac Toe</h1>

    <div class="container">
      <div class="row" v-for="row in rows" :key="row.id">
        <div class="col-.5 square" v-for="col in cols" :key="col.id">
          <tile :turn="turn" :colId="col.id" :rowId="row.id" v-on:onClickedTile="changeTile"></tile>
        </div>
      </div>
    </div>

    <TicTacScore :placeValue="placeValue" :xCord="xCord" :yCord="yCord"></TicTacScore>

    <div>
      <button @click="whoGoes">Play the game</button>
      <!-- <button @click="reset">Reset</button> -->
    </div>
  </div>
</template>


<script>
import tile from "./tile";

import TicTacScore from "./TicTacScore";

export default {
  mounted() {},

  data() {
    return {
      rows: [{ id: 0, value: 0 }, { id: 1, value: 0 }, { id: 2, value: 0 }],
      cols: [{ id: 0, value: 0 }, { id: 1, value: 0 }, { id: 2, value: 0 }],

      placeValue: -5,
      xCord: 0,
      yCord: 0,
      turn: 0.5
    };
  },

  methods: {
    whoGoes() {
      var first = prompt("Who goes first?", "X or O");
      if (first == "X") {
        this.turn = 0;
      } else {
        this.turn = 1;
      }
    },

    reset() {},

    changeTile(obj) {
      // console.log("obj line 61",obj.rowId);
      this.turn = this.turn + 1;
      // console.log(this.turn);
      this.scoreUpdate();
      this.xCord = obj.rowId;
      this.yCord = obj.colId;
    },

    scoreUpdate() {
      if (this.turn % 2 == 1) {
        this.placeValue = 2;
      } else if (this.turn % 2 == 0) {
        this.placeValue = 1;
      }
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

.CNTR {
  text-align: center;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
