<template>

    <div class="product">
        <div class="product-image">
            <img :src="image">
        </div>

        <div class="product-info">
            <h1>{{title}}</h1>
            <h1>{{ product }}</h1>
            <p v-if="inStock">in stock</p>
            <p v-else>Out of stock</p>
        </div>

    <ul>
        <li v-for="detail in details">{{ detail }}</li>
    </ul>

    <div v-for="variant in variants" 
        :key="variant.variantId"
        class="color-box"
        :style="{ backgroundColor: variant.variantColor }">
        <p @mouseover="updateProduct(variant.variantImage)">{{ variant.variantColor }}</p>

    </div>

    <div class="cart">
        <p>Cart {{cart}}</p>
    </div>

    <button @click="addToCart"
            :disabled="!inStock"
            :class="{ disabledButton: !inStock }">Add to cart</button>

    </div>

</template>

<script>
  
 export default {

    mounted() {
        console.log('Component mounted.')
    },

    data(){
        return{
            product:"Xz",
            image: '/images/Os.png',
            inStock: true,
            details: ["80% cotto", "askjhf", "ojhfd"],
            variants: [
                {
                    variantId: 2234,
                    variantColor: "green",
                    variantImage: '/images/Os.png',
                },
                {
                    variantId:5465,
                    variantColor: "blue",
                    variantImage: '/images/Xs.png',
                },
            ],
            cart: 0,
    
        }
    },

    methods:{

        addToCart(){
            this.cart++;
        },

        updateProduct(variantImage){
            this.image = variantImage;
        }
    },

    computed:{


    }
}  
 
    


</script>