<template>
  <div>

    <div class="container">

      <div class="row">
        <menuSections
        v-for="sections in section"
        :key="sections"
        :id="sections"></menuSections>
      </div>
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

      section: ["Breakfast", "Lunch", "Dinner", "Desert"],
      mItems:[],

    
    };
  },
};
</script>

<style>
</style>