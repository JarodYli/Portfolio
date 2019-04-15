<template>
    <div>
        ________{{calculatedVal}}_________ {{opIn}}__{{next}}
    </div>
</template>

<script>
    export default {

        props:{
            calculatedVal:String,
            opIn:String,
            next:String,
        }
        
    }
</script>

<style lang="css" scoped>

</style>