<template>
    <div class="row justify-content-between">
        <div id="app" class="col-4" name="flg1">
            <h3 class="border-bottom">使用中</h3>
            <draggable :options="options" group="myGroup" @end="onEnd" :data-column-id=1 id="flg1">
                <div class="item" v-for="item in categoriesFlg1" :key="item.id">
                    <div v-if="item.use_flg == 1">
                        {{item.name}}
                        <input type="hidden" :name=item.name　v-model=item.use_flg>
                    </div>
                </div>
            </draggable>
        </div>
        <div id="app" class="col-4" name="flg0">
            <h3 class="border-bottom">未使用</h3>
            <draggable :options="options" group="myGroup" @end="onEnd" :data-column-id=0 id="flg0">
                <div class="item" v-for="item in categoriesFlg0" :key="item.id">
                    <div v-if="item.use_flg == 0">
                        {{item.name}}
                        <input type="hidden" :name=item.name　v-model=item.use_flg>
                    </div>
                </div>
            </draggable>
        </div>
    </div>
</template>

<script>
    import draggable from 'vuedraggable'

    const axios = require('axios');
    export default {
        name: "dnd",
        components: { draggable },
        mounted(){
            axios.get('/category/1').then(response =>{
            this.categoriesFlg1 = response.data;
            })
            axios.get('/category/0').then(response =>{
            this.categoriesFlg0 = response.data;
            })
        },
        methods: {
        onEnd: function(originalEvent){
                var flg = originalEvent.to;
                var name = originalEvent.item.innerText;
                console.log(flg.id);
                console.log(document.category[name].value);
                if (flg.id == "flg1"){
                    document.category[name].value = 1;
                }else if(flg.id == "flg0"){
                    document.category[name].value = 0;
                }
                console.log(document.category[name].value);
            }
        },
        data:function() {
            return {
                options: {
                    animation: 200,
                    group: "myGroup",
                },
                categoriesFlg1:[],
                categoriesFlg0:[],
            };
        }
    }
</script>

<style>
    .item {
        font-size: 1.2rem;
        display: inline-block;
        width: 100%;
        text-align: center;
        margin: 5px;
        padding: 5px;
        border: 1px solid #7f7f7f;
        border-radius: 10px;
        background-color: #ffffff;
    }
    .item:hover {
        cursor: grab;
    }
    .item:active {
        cursor: grabbing;
    }
</style>
