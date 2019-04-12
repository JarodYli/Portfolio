<template>



  <div>
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

      winArrayRows:[
                [-5,-5,-5],
                [-5,-5,-5],
                [-5,-5,-5],
                [-5,-5,-5],
                
      ],

      winArrayCols:[
                [-5,-5,-5],
                [-5,-5,-5],
                [-5,-5,-5],
                [-5,-5,-5],
      ],

      

    };
  },

  mounted(){

      console.log("Score Mounted");

    //   console.log(this.placeValue);
  },


  props:{
      placeValue:Number,
      xCord:Number,
      yCord:Number,

  },

  methods:{
      testing(){
        //   console.log("in here testing",this.xCord);
          return this.placeValue;
      },

      getSum(total, num) {
  return total + num;
}
  },

  computed:{
      winUpdate(){
        //  console.log("PlaceValue:",this.placeValue);
          return this.placeValue;
      },

      winPushRows(){
        //   console.log("xCord:", this.xCord, "yCord:", this.yCord);
          this.winArrayRows[this.xCord][this.yCord] = this.placeValue;
          // creating diagnol arrays
          if(this.xCord == this.yCord){
              this.winArrayRows[3][this.yCord] = this.placeValue;
          }
          
          return this.xCord && this.yCord;
      },

      winPushCols(){
           this.winArrayCols[this.yCord][this.xCord] = this.placeValue;
          // creating diagnol arrays
          if(this.yCord == (2 -this.xCord)){
            //   console.log(this.xCord, this.yCord);
              this.winArrayCols[3][this.xCord] = this.placeValue;
          }
            // console.log(this.winArrayCols[0].reduce(this.getSum));
          for(this.k in this.winArrayCols){
              console.log("array:", this.k);
            //   console.log("array:", this.k.reduce(this.getSum));
           }
          return this.xCord && this.yCord;
      },



      

  },
};
</script>




<style lang="css" scoped>
</style>