<template>
  <div>

    <div class="container">

      <!-- <div class="row">
        <menuSections
        v-for="sections in section"
        :key="sections"
        :id="sections"></menuSections>
      </div> -->
    </div>
  </div>

</template>

<script>
export default {

  data() {
    return {
    anitem : "",
      info: "",

      section: ["Breakfast", "Lunch", "Dinner", "Desert"],
      mItems:[],

    
    };
  },

  mounted(){
    console.log("this is the response:", this.info);
    axios
                .get('https://cors-anywhere.herokuapp.com/' + 'https://entree-f18.herokuapp.com/v1/menu/1')
                
                .then(response => (this.info = response));



  },
};
</script>

<style>
</style>