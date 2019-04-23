<template>
  <div>
    HODTFHGTH
    <div class="container">
      <span v-once>
      <div class="row">

        
        <div class="col"
         v-for="i in sections" 
         :key="i"
         :id="index++"
         >
        <a>{{index}}</a>
          <a>{{i}}</a>
          <div>{{mItems[id]}}</div>

        </div>
        </div>

        </span>



        <button @click="makeMenu()"></button>
      </div>
      </div>
   
</template>

<script>
export default {
  name: "menuGenerator",
  data() {
    return {
    anitem : "",
      info: null,
      food_str: "HOI",
      sections: ["Breakfast", "Lunch", "Dinner", "Desert"],
      mItems:[],
      index:-1,
    
    };
  },

//   mounted(){
//       var self = this;
//       axios
//           .get('https://cors-anywhere.herokuapp.com/' + 'https://entree-f18.herokuapp.com/v1/menu/4')
        
//           .then(response => (this.info = response))
//           .then(function () {
//               var anitem = "";
//                 for (var item in self.info.data.menu_items) {

//                     console.log(item);
//                     anitem += self.info.data.menu_items[item].description + " ";
//                 }
//                 self.food_str = anitem;
//           })
        
//   },

        methods:{

        makeMenu(){
            var self = this;

            axios
                .get('https://cors-anywhere.herokuapp.com/' + 'https://entree-f18.herokuapp.com/v1/menu/6')
                
                .then(response => (this.info = response))
                .then(function () {
                    var anitem = "";
                        for (var item in self.info.data.menu_items) {

                            console.log(item);
                            anitem += self.info.data.menu_items[item].description + " ";
                        }
                        // console.log("ANITme:", anitem);
                        self.food_str = anitem;
                        self.food();
                })

                
        },

        food() {



            this.mItems.push(this.food_str);
            console.log(this.mItems[0]);
            return this.food_str;
    }

    },

  
};
</script>

<style>
</style>