/**
 * Created by jokamjohn on 5/22/2016.
 */

import Graph from "./Graph.js";

export default Graph.extend({

    template: `
            <div>
               
                    <canvas id="chart" width="400" height="200" v-el:canvas></canvas>
            
                     {{{ legend }}}
            </div>`,

    props: {
        range : { default: 10 }
    },

    methods: {
        fetchData(){
            return this.$http.get(this.url, { range: this.range } );
        }
    }


});