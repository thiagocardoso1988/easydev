require('../app');
require('./menu');
require('./products');
require('./contact');
require('./footer');

//Vue.component('example', require('./components/Example.vue'));
//Vue.component('v-CarouselItem', require('./components/CarouselItem.vue'));

//import VueCarouselItem from './components/CarouselItem.vue'


const app = new Vue({
    el: '#app',

    /*components: {
    	'vue-carouselitem': VueCarouselItem,
    }*/
});