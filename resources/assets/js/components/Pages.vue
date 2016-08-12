<template>
    <div class="row">
        <div v-bind:class="{ 'col-md-5' : showControlPanel, 'col-md-12' : !showControlPanel}">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h4 class="pages--title">Page List</h4>
                    <button
                        class="btn btn-default pull-right pages--button-create"
                        @click="createPage"
                    >
                        Opret Side
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered pages--table">
                        <thead>
                            <tr>
                                <td>Side Navn</td>
                                <td>Addresse</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="pages--table-row"
                                v-for="page in pages"
                                @click="selectPage(page)"
                            >
                                <td class="page--name">
                                    {{ page.name }}
                                </td>
                                <td class="pages--route">
                                    {{ page.route }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div
            class="col-md-7"
            v-show="showControlPanel"
        >
            <div class="panel panel-default">
                <div class="panel-heading">
                    Pages Control Panel
                </div>
                <div class="panel-body">
                    <form v-on:submit.prevent>
                        <div class="form-group">
                            <label for="name">Navn</label>
                            <input class="form-control" id="name" name="name" v-model="selectedPage.name" placeholder="Et Navn til refference">
                        </div>
                        <div class="form-group">
                            <label for="route">Route</label>
                            <input class="form-control" id="route" name="route" v-model="selectedPage.route" placeholder="Route Navn">
                        </div>
                        <div class="form-group">
                            <label for="template">Tema / Skabelon || {{ selectedPage.template_id }}</label>
                            <select class="form-control" id="template" name="template" v-model="selectedPage.template_id">
                                <option
                                    v-for="template in templates"
                                    value="{{template.id}}"
                                >
                                    {{template.name}}
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Indhold</label>
                            <editor></editor>
                        </div>

                        <button
                            class="btn btn-success pull-right"
                            @click="savePage"
                        >
                            Gem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.pages--title
{
    display: inline-block;
    margin: 7px 0;
}
.pages--button-create {
    margin-right: -10px;
    border: 2px solid rgba(65, 65, 65, 0.25);
}
thead{
    font-weight: bold;
    border-bottom: 2px solid rgb(220, 220, 220);
}
.pages--table{
    background: white;
}
.page--button-edit {
    font-size: 20px;
    padding: 0 5px;
}
.pages--table-row{

}
.pages--table-row:hover{
    cursor: pointer;
}
.pages--route{
    padding: 0 15px;
    color: grey;
    font-weight: initial;
}
</style>
<script>
export default
{
    props:{
    },
    data(){
        return{
            showControlPanel: false,
            selectedPage: {},
            pages:
            [
                {
                    id : 1,
                    name : "Forside",
                    route : "/",
                    content : "Willkommen",
                    template_id : "1"
                },{
                    id : 2,
                    name : "IndholdsSide",
                    route : "/indhold",
                    content : "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ea molestias nemo officiis quidem quisquam sequi velit voluptas voluptatum? Adipisci culpa cum dolores iusto molestias odit possimus tempora temporibus totam!",
                    template_id : "2"
                },{
                    id : 3,
                    name : "Kontakt",
                    route : "/about",
                    content : "Vi er ...",
                    template_id : "3"
                }
            ],
            templates:
            [
                {
                    id : 1,
                    name: "Teknisk Forvaltning"
                },{
                    id : 2,
                    name: "Den Gule Giraf"
                },{
                    id : 3,
                    name: "Flammen"
                },{
                    id : 4,
                    name: "Café Pingvin"
                }
            ]
        }
    },
    computed: {
        
    },
    methods: {
        selectPage: function(page)
        {
            this.selectedPage = page;
            this.$broadcast('update-editor', page.content);
            this.openControlPanel();
        },
        openControlPanel : function()
        {
            if(!this.showControlPanel)
            {
                this.showControlPanel = true;
            }
        },
        closeControlPanel : function()
        {
            if(this.showControlPanel)
            {
                this.showControlPanel = false;
            }
        },
        createPage: function()
        {
            // ajax to add page?
            var page = {
                name :  "Ny Side"
            };
            this.pages.push(page);
            this.selectPage(page);
        },
        savePage: function()
        {
            // update serverside
        }
        
    },
    ready(){
        
    }
}
</script>