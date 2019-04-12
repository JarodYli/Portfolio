<template>
  <div>
    <h1>{{theVictor}}</h1>

    <p>{{winPushRows}}</p>
    <p>{{winPushCols}}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      winArrayRows: [[-5, -5, -5], [-5, -5, -5], [-5, -5, -5], [-5, -5, -5]],

      winArrayCols: [[-5, -5, -5], [-5, -5, -5], [-5, -5, -5], [-5, -5, -5]],

      theVictor: "----------"
    };
  },

  mounted() {
     
  },

  props: {
    placeValue: Number,
    xCord: Number,
    yCord: Number
  },

  methods: {
    // function for the reduce method
    getSum(total, num) {
      return total + num;
    },

    winner() {
      var i = 0;
      var winM = this.winArrayCols.concat(this.winArrayRows);
      var flatWinM = winM.flat(8);
      var winWatch = 0;
      // for every array in both arrays
      for (this.items in winM) {

        if(!flatWinM.includes(-5)){
            this.theVictor = "C.A.T";
            break;
        }
        winWatch = winM[i].reduce(this.getSum);

        //if the sum of any array ever equals 3 or 6 report the winner respectively
        if (winWatch == 3) {
          this.theVictor = "Winner is Os";
          break;
        }
        if (winWatch == 6) {
          this.theVictor = "Winner is Xs";
          break;
        }
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

    },

    winPushCols() {
      // generates arrays that corresponds with columns
      this.winArrayCols[this.yCord][this.xCord] = this.placeValue;

      // creating diagnol arrays
      if (this.yCord == 2 - this.xCord) {
        this.winArrayCols[3][this.xCord] = this.placeValue;
      }

      this.winner();
    }
  }
};
</script>




<style lang="css" scoped>
</style>