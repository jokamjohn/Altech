/**
 * Created by jokamjohn on 5/22/2016.
 */
import Vue from 'vue';
import VueResource from 'vue-resource';
import HourGraph from './components/hourCount';


Vue.use(VueResource);

new Vue({
   el: 'body',
    
    components: { 
        HourGraph
    }
});