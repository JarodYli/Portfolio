
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));



Vue.component('Clock', require('./components/Clock.vue') .default);



// Tic Tac Toe components:
Vue.component('testtac', require('./components/testtac.vue') .default);
Vue.component('tile', require('./components/tile.vue') .default);
Vue.component('TicTacScore', require('./components/TicTacScore.vue') .default);

// Calculator Components
Vue.component('calculations', require('./components/calculations.vue') .default);
Vue.component('calcButtons', require('./components/calcButtons.vue') .default);
Vue.component('calcViews', require('./components/calcViews.vue') .default);

//Restaurant Site Components
Vue.component('menuview', require('./components/menuView.vue') .default);
Vue.component('menugenerator', require('./components/menuGenerator.vue') .default);
Vue.component('menuSections', require('./components/menuSections.vue') .default);


// CRUD ToDo App Components
Vue.component('todo', require('./components/ToDo.vue') .default);
Vue.component('TaskItem', require('./components/TaskItem.vue') .default);

// Weather App Components
Vue.component('Weather', require('./components/Weather.vue') .default);

//Mind Reader


Vue.component('mindread', require('./components/MindRead.vue') .default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        

    }
});
