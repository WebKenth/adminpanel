<template>
    <div class="filebrowsertrashcan">
        <ul class="filebrowsertrashcan--list list-group">
            <li
                class="filebrowsertrashcan--item list-group-item"
                v-for="item in items"
            >
                <div class="filebrowsertrashcan--item-container">
                    <h2 class="list-group-item-heading">
                        <span v-if="item.files"><i class="fa fa-folder"></i></span>
                        <span v-else><i class="fa fa-file"></i></span>
                        {{ item.name }}
                        <span v-if="item.files">( {{ item.num_of_files }} )</span>
                    </h2>
                    <div class="pull-right">
                        <button class="btn btn-danger">Slet</button>
                        <button class="btn btn-success">Gendan</button>
                    </div>
                </div>
                <ul
                    class="list-group"
                    v-if="item.files"
                >
                    <li
                        class="list-group-item"
                        v-for="file in item.files">
                        <!--<img class="filebrowsertrashcan&#45;&#45;item-image" v-bind:src="file.path">-->
                        <p>{{ file.name }}</p>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</template>
<style>
.filebrowsertrashcan--item h2 {
    display:inline;
}
.filebrowsertrashcan--item-container{
    margin-bottom: 10px;
}
.filebrowsertrashcan--item-image{
    height: 200px;
    width: 200px;
}
</style>
<script>
export default
{
    props:{
        csrf_token: {}
    },
    data(){
        return{
            items: {}
        }
    },
    computed: {

    },
    methods: {
        getTrashedItems: function()
        {
            this.$http.get('/api/filebrowser/trashcan/').then(function(response)
            {
                return this.$set('items', JSON.parse(response.body));
            }, function(response) {
                console.log(response);
            });
        }
    },
    ready(){
        this.getTrashedItems();
    }
}
</script>
