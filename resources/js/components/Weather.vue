<template>
    <div>
            <h1>HOI</h1>
    </div>
</template>

<script>
    export default {
        
    methods () {
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => {
        this.info = response.data.bpi
      })
      .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false)
  }
    }
    //'http://api.openweathermap.org/data/2.5/weather?zip=' + zipcode + ',us&APPID=72a7ecf71881957a15764decf1e2ce95';
</script>

<style>

</style>