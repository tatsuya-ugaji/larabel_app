<div id="app">
    <div class="col-6">
        <line-chart></line-chart>
        <p>test</p>
    </div>
</div>

<script>
    import { Pie } from 'vue-chartjs'
    const axios = require('axios');
    const path = location.pathname + '/item';

    export default {
        extends: Pie,
        data:function() {
            return {
                options: {

                },
                legals:[],
                data:[],
            };
        },
        mounted () {
            axios.get(path).then(response =>{
                this.name = response.data.name;
                this.actual = response.data.actual;
                this.budget = response.data.budget;
                this.name = JSON.stringify
                this.actual = JSON.stringify
                this.budget = JSON.stringify
                console.log(this.name);
                console.log(this.actual);
                console.log(this.budget);
            }),
            this.renderChart({
                labels: this.name,
                datasets: [{
                    label: 'Data One',
                    backgroundColor: '#f87979',
                    data: this.actual
                }]
            })
        },
    }

</script>
