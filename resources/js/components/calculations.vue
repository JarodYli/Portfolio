

<template>
  <div>
    <h1>Calculator</h1>

    <div class="container CNTR">
        <div class="row">
            <calcViews :calculatedVal="outPut" :opIn="opInput" :next="nextInput"></calcViews>
            </div>

      <div class="row">
        <div class="col">
          <span v-once>
            <div class="row" v-for="n in 3" :key="n">
              <div class="col square" v-for="j in 3" :key="j" :id="numbersForButtons--">
                  <p>{{numbersForButtons}}</p>
                <calcButtons :buttID="numbersForButtons.toString()" v-on:onClickedTile="eval"></calcButtons>
              </div>
            </div>
          </span>

          <div class="row">

            <div class="col square">
                <p>0</p>
                <calcButtons :buttID="'0'" v-on:onClickedTile="eval"></calcButtons>
            </div>
            <div class="col square" >
                <p>.</p>
                <calcButtons :buttID="'.'" v-on:onClickedTile="eval" ></calcButtons>
            </div>
            <div class="col square" @click="assess()">=</div>

            </div>
        </div>
          

        <div class="col">
          <div class="row square" v-for="ops in operators"
          :key="ops">
          <p>{{ops}}</p>
          <calcButtons :opID="ops" v-on:onClickedTile="eval"></calcButtons></div>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("mounted");
  },

  data() {
    return {

      numbersForButtons: 10,
      operators: ["/", "*", "-", "+"],

      firstInput: '',
      opInput: '',
      nextInput: '',
      outPut:'',
      flip:true,
      opFlip:true,



    };
  },

  methods:{


      eval(obj){
    
          // while there has not been an operator entered
          // check if  object is a number append it to lastInput
            
            if((obj.buttID || obj.buttID == 0 ) && this.flip){
                console.log("wizarding is fun");
                this.firstInput = this.firstInput + obj.buttID;
                this.outPut = this.firstInput;
            }
    

          //if object is an operator store it
          if(obj.opID && this.opFlip){
              this.nextInput = '';
              this.opInput = obj.opID;
              this.flip = false;
              console.log("success:", this.opInput);
          }

          //if object after operator is a number append it to nextInput

          if((obj.buttID || obj.buttID == 0) && (this.flip == false)){
              this.nextInput = this.nextInput + obj.buttID;
              this.outPut = this.nextInput;
              this.opFlip = false;

              console.log("second number");
          }
        
          //if object is another operator evalute the previous operator and save this to lastInput
          if(obj.opID && (this.opFlip == false)){

              this.opInput = obj.opID;

              this.nextInput = '';
          }


          console.log(obj);
          
      },

      assess(){

          switch(this.opInput){
                  case "+":
                  this.outPut = (parseFloat(this.firstInput) + parseFloat(this.nextInput)).toString();
                  break;

                  case "-":
                  this.outPut = (parseFloat(this.firstInput) - parseFloat(this.nextInput)).toString();
                  break;

                  case "*":
                  this.outPut = (parseFloat(this.firstInput) * parseFloat(this.nextInput)).toString();
                  break;

                  case "/":
                  this.outPut = (parseFloat(this.firstInput) / parseFloat(this.nextInput)).toString();
                  break;
              }
              console.log("hoi:", this.opInput)
              this.firstInput = this.outPut;

      },

      appendComma(){

          
          console.log('gimme a comma');
          this.outPut = this.outPut + ".";
      }
  },


};
</script>

<style>

.CNTR{
    text-align:center;
}

.square {
  height: 100px;
  width: 100px;

  border-color: black;
  border-style: solid;
}
</style>