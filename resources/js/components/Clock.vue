<template>
  <div>
    <h1>Millitary Time: {{time}}</h1>
    <h1>Standard Time: {{regTime}}</h1>
    


    <p>-</p>
    <p>-</p>
    <p>-</p>
    
    <h1>National Humiliation Day January 4, 2020</h1>
    
    <p>{{days}}:{{hrs}}:{{mins}}:{{secs}}</p>

  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.slicer();
            this.converter();
            this.counting();
        },
        data() {
            return {
                time: new Date(),
                regTime: "helo",
                countDown: "helo",
                dateSet:new Date("January 4,2020 00:00:00").getTime(),
                days: "helo",
                hrs: "helo",
                mins: "helo",
                secs: "helo",

            }

        },
       
     
    
        methods:{

            //Count Down to chosen date and time

                counting(){

                    // calculate the hours seconds minute and days left
                    var currentTime = new Date().getTime();
                    var timeLeft = this.dateSet - currentTime;

                    
                    // find difference with todays date and time
                    this.days = Math.floor((((((timeLeft)/1000)/60)/60)/24));
                    this.hrs =  Math.floor((((timeLeft)/1000)/60)/60)%24;
                    this.mins = Math.floor(((timeLeft)/1000)/60)%60;
                    this.mins = Math.floor(((timeLeft)/1000)/60)%60;
                    this.secs = Math.floor((timeLeft)/1000)%60;
                    //format to days, hours, minutes and seconds left

                    setInterval(() => {
                    
                    this.counting();
                }, 1000);
            },

            // Finds millitary time
            slicer(){
                this.time = new Date();
                // this. time = this.time.toISOString().slice(11, 19);
                this.time = this.time.getHours().toString() + ":" + this.time.getMinutes().toString() + ":" + this.time.getSeconds().toString();
                var self = this;
                setInterval(() => {
                    // self.time = new Date();
                    self.slicer();
                }, 1000);
            },

            // converts millitary time to standard time
            converter(){
                this.regTime = this.time;

                var chunks = this.regTime.split(":");
                
                var armtime = [];

                // change numbers between 13 and 24
                if (parseInt(chunks[0]) <= 24 && parseInt(chunks[0]) > 12) {
                    armtime.push(parseInt(chunks[0]) - 12 );
                }
                // keep 1-12
                else {
                    armtime.push(chunks[0]);
                }
                //needs a string padding so that each item always has two string digits
                for (var i = 1; i < chunks.length; i++) {
                    armtime.push(chunks[i].padStart(2, '0'));
                }
                //join the items together with a colon between them
                this.regTime = armtime.join(":");

                setInterval(() => {
                    // self.time = new Date();
                    this.converter();
                }, 1000);
            
            },



            

        },
        
    }
</script>