<template>
  <div>
    <h1>{{theVictor}}</h1>
    <p>{{winUpdate}}</p>
    <p>{{xCord}}</p>
    <p>{{yCord}}</p>
    <p>{{winPushRows}}</p>
    <p>{{winPushCols}}</p>
    <p>Rows{{winArrayRows}}</p>
    <p>Cols{{winArrayCols}}</p>

    <button @click="testing">Test</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      winArrayRows: [[-5, -5, -5], [-5, -5, -5], [-5, -5, -5], [-5, -5, -5]],

      winArrayCols: [[-5, -5, -5], [-5, -5, -5], [-5, -5, -5], [-5, -5, -5]],

      theVictor: ""
    };
  },

  mounted() {
    console.log("Score Mounted");

    //   console.log(this.placeValue);
  },

  props: {
    placeValue: Number,
    xCord: Number,
    yCord: Number
  },

  methods: {
    testing() {
      //   console.log("in here testing",this.xCord);
      return this.placeValue;
    },

    getSum(total, num) {
      return total + num;
    },

    winner() {
      var i = 0;
      var winM = this.winArrayCols.concat(this.winArrayRows);
      var winWatch = 0;

      // for every
      for (this.items in winM) {
        winWatch = winM[i].reduce(this.getSum);

        //if the sum of any array ever equals 3 or 6 report the winner respectively
        this.theVictor = winWatch == 3 ? "Winner is Os" : winWatch == 6 ? "Winner is X" : "";
        i++;
      }
    }
  },

  computed: {
    winUpdate() {
      return this.placeValue;
    },

    winPushRows() {
      //generate the arrays that correspond with rows
      this.winArrayRows[this.xCord][this.yCord] = this.placeValue;

      // creating diagnol arrays
      if (this.xCord == this.yCord) {
        this.winArrayRows[3][this.yCord] = this.placeValue;
      }

      this.winner();
      return this.xCord && this.yCord;
    },

    winPushCols() {
      // generates arrays that corresponds with columns
      this.winArrayCols[this.yCord][this.xCord] = this.placeValue;

      // creating diagnol arrays
      if (this.yCord == 2 - this.xCord) {
        this.winArrayCols[3][this.xCord] = this.placeValue;
      }

      this.winner();

      return this.xCord && this.yCord;
    }
  }
};
</script>




<style lang="css" scoped>
</style>