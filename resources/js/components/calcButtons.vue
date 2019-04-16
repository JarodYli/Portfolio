<template>

    <div @click="onClickTile">
      <img :src="image" width="75" height="50">
    </div>

</template>

<script>
export default {
  mounted() {
    console.log(this.test);
  },

  props: {
    buttID: String,
    opID: String,
  },

  data() {
    return {
      image: "/images/blank.png"
    };
  },

  methods: {
    onClickTile() {
      console.log("hoi:", this.buttID, this.opID);
      
      this.$emit("onClickedTile", { buttID: this.buttID, opID: this.opID });
    }
  }
};
</script>

<style>

</style>