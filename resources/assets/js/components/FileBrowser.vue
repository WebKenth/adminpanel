<template>

 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Billede Upload</h2>

                    <ol class="breadcrumb">/
                         <li v-for="path in path">{{path}}</li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="file-manager">
                                <h5>Show:</h5>
                                <a href="#" class="file-control active">Ale</a>
                                <a href="#" class="file-control">Documents</a>
                                <a href="#" class="file-control">Audio</a>
                                <a href="#" class="file-control">Images</a>
                                <div class="hr-line-dashed"></div>
       <form action="/api/filebrowser/file" id="dropzone" class="dropzone btn btn-primary btn-block">
                <input type="hidden" name="_token" value="{{ csrf_token }}">
                <input type="hidden" name="folder_id" value="{{ current_folder_id }}">
                <div class="fallback">
                    <input name="file" type="file" multiple class="btn btn-primary btn-block" />
                </div>
            </form>
                                <div class="hr-line-dashed"></div>
                                <h5>Folders</h5>
                                 <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mappe Navn" v-model="folder_name">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit" @click="createFolder">Opret Mappe</button>
                            </span>
                        </div>
                                <ul class="folder-list" style="padding: 0">
                                    <li><a href=""><i class="fa fa-folder"></i> Files</a></li>
                                    <li><a href=""><i class="fa fa-folder"></i> Pictures</a></li>
                                    <li><a href=""><i class="fa fa-folder"></i> Web pages</a></li>
                                    <li><a href=""><i class="fa fa-folder"></i> Illustrations</a></li>
                                    <li><a href=""><i class="fa fa-folder"></i> Films</a></li>
                                    <li><a href=""><i class="fa fa-folder"></i> Books</a></li>
                                </ul>
                                <h5 class="tag-title">Search file</h5>
                            <div class="input-group" id="users3">
                                <input type="text" placeholder="Søg element " class="search input form-control">
                                <span class="input-group-btn ">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"  class="sort" data-sort="name"></i> Go!</button>
                                </span>
                            </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="file-box" class="file-box filebrowser--item name"
                                v-for="file in files"
                                v-on:click="selectItem(file,$event)"
                                v-bind:class="{ 'filebrowser--selected-item' : isSelected(file) }">
                                <div class="file list2">
                                    <a href="#">
                                        <span class="corner"></span>

                                        <div class="image">
                                            <img v-bind:src="file.path">
                                        </div>
                                        <div class="file-name name">
                                            {{ file.name }}
                                            <br>
                                            <small class="born">Added: Jan 6, 2014</small>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


<div id="filebrowser" class="filebrowser ibox-title">
    <img v-show="loading" src="/images/ring.svg" class="filebrowser--loading">
    <div class="filebrowser--controls">
        <div class="">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1">
                        <button class="btn btn-info" @click="openLastFolder(last_folder_id)">Tilbage</button>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mappe Navn" v-model="folder_name">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit" @click="createFolder">Opret Mappe</button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button
                            class="btn btn-warning"
                            @click="renameItem"
                            :disabled="!renameable"
                        >
                            Omdøb
                        </button>
                    </div>
                    <div class="col-md-1">
                        <button
                            class="btn btn-danger"
                            @click="deleteSelectedFiles"
                            :disabled="!deleteable"
                        >Slet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ol class="breadcrumb">/
        <li v-for="path in path">{{path}}</li>
    </ol>
    <div class="filebrowser--body">
        <ul class="filebrowser--list">
            <li
                class="filebrowser--item filebrowser--folder"
                v-for="folder in folders"
                v-on:click="selectItem(folder,$event)"
                v-on:dblclick="openFolder(folder.id)"
                v-bind:class="{ 'filebrowser--selected-item' : isSelected(folder) }"
            >
                <i class="fa fa-folder" aria-hidden="true"></i>
                <p>{{ folder.name }}</p>
            </li>
            <li
                class="filebrowser--item"
                v-for="file in files"
                v-on:click="selectItem(file,$event)"
                v-bind:class="{ 'filebrowser--selected-item' : isSelected(file) }"
            >
                <img v-bind:src="file.path">
                <p>{{ file.name }}</p>
            </li>
            <li
                class="filebrowser--no-items"
                v-if="emptyDirectory"
            >
                Tom Mappe
            </li>
        </ul>
        <div class="btn btn-primary btn-block ">
            <form action="/api/filebrowser/file" id="dropzone" class="dropzone btn btn-primary btn-block">
                <input type="hidden" name="_token" value="{{ csrf_token }}">
                <input type="hidden" name="folder_id" value="{{ current_folder_id }}">
                <div class="fallback">
                    <input name="file" type="file" multiple class="btn btn-primary btn-block" />
                </div>
            </form>
        </div>
    </div>
</div>

</template>
<style>
.filebrowser{
    position: relative;
}
.filebrowser--pathfinder{
    margin: -15px 0;
}
.filebrowser--list {
    display: flex;
    list-style: none;
    flex-wrap: wrap;
    padding: 0;
    background-color: whitesmoke;
    border-radius: 3px;
}
.dropzone, .panel{
    background-color: whitesmoke;
}
.dropzone{
        background-color: #1ab394;
    border-color: #1ab394;
    color: #FFFFFF;
}
.filebrowser--item {
    position: relative;
    display: inline-block;
    border: 2px solid #dddddd;
    padding: 5px;
    margin: 10px;
    width: calc(100% * (1 / 4) - 20px);
    height: 150px;
    overflow: hidden;
}
.filebrowser--item img {
    width: 100%;
}
.filebrowser--item p {
    position: absolute;
    z-index: 2000;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.5);
    margin: 0;
    top: 0;
    text-align: center;
    padding-top: 20%;
    opacity: 1;
}
.filebrowser--item p:hover{
    opacity: 0.2;
}
.filebrowser--folder{
    cursor: pointer;
    text-align: center;
}
.filebrowser--folder i{
    font-size: 150px;
    margin-left: 7px;
}
.filebrowser--folder p {
    color: white;
    font-size: -webkit-xxx-large;
}
.filebrowser--selected-item {
    border: 5px solid #2ecc71;
}
.filebrowser--no-items {
    height: auto;
    width: 100%;
    padding: 10px;
    text-align: center;
    margin: 50px 0;
    font-size: 25px;
}
.filebrowser--loading{
    position: absolute;
    z-index: 9000;
    width: 100%;
    height: calc( 100% - 143px);
    background: rgba(73, 77, 77, 0.6);
    margin: 142px 0 0 0;
    border-radius: 2px;
}
</style>
<script src="/js/all.js"></script>
<script src="http://listjs.com/no-cdn/list.js"></script>
<script type="text/javascript">
var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
</script>
<script>
export default{
    props:{
        csrf_token:{}
    },
    data(){
        return{
            path: [],
            files: {},
            folders: {},
            loading: false,
            folder_name: '',
            breadcrumbs: [0],
            last_folder_id: 0,
            selected_items: [],
            current_folder_id: 0
        }
    },
    computed: {
        deleteable: function(){
            return !(this.selected_items.length == 0);
        },
        renameable: function(){
            return !(this.selected_items.length == 0 || this.selected_items.length >= 2);
        },
        emptyDirectory: function(){
            return !(this.folders.length != 0 || this.files.length != 0);
        }
    },
    methods: {
        isSelected: function(object)
        {
            return this.selected_items.indexOf(object) != -1;
        },
        selectItem: function(object, event)
        {
            if(event.ctrlKey || event.metaKey)
            {
                if(!this.isSelected(object))
                {
                    var array = this.selected_items;
                    array.push(object);
                    console.log(array);
                    this.selected_items = [0];
                    this.selected_items = array;
                }
            }else
            {
                this.selected_items = [ object ];
            }
        },
        selectFolder: function(id)
        {
            if(event.ctrlKey || event.metaKey)
            {
                if(!this.selected_folders.indexOf(id))
                {
                    var array = this.selected_folders;
                    array.push(id);
                    this.selected_folders = [0];
                    this.selected_folders = array;
                }
            }else
            {
                this.selected_folders = [ id ];
            }
        },
        openFolder: function(parent_id)
        {
            this.nextBreadcrumb(parent_id);
            this.refresh(parent_id);
        },
        refresh:function(folder_id)
        {
            this.last_folder_id = this.breadcrumbs[this.breadcrumbs.length - 2];
            this.current_folder_id = folder_id;
            this.selected_items = [];

            this.getPath();
            this.getFolders(folder_id);
            this.getFiles(folder_id);
        },
        openLastFolder: function(parent_id)
        {
            if(this.breadcrumbs.length != 1)
            {
                this.prevBreadcrumb(parent_id);
                this.refresh(parent_id);
            }
        },
        getFolders: function (parent_id)
        {
            this.$http.get('/api/filebrowser/folders/'+parent_id).then(function(response)
            {
                folders = response.body;
                this.$set('current_folder_id', parent_id);
                return this.$set('folders', JSON.parse(folders));
            }, function(response) {
                console.log(response);
            });
        },
        getFiles: function (folder_id)
        {
            this.$http.get('/api/filebrowser/files/'+folder_id)
                .then( function(response)
                {
                    files = response.body;
                    this.$set('current_folder_id', folder_id);
                    return this.$set('files', JSON.parse(files));
                }, function (response){
                    console.log(response);
                });
        },
        getPath: function()
        {
            var me = this;
            this.$http
                .get('/api/filebrowser/breadcrumbs/'+encodeURIComponent(this.breadcrumbs),
                {
                    before(request)
                    {
                        me.loading = true;
                    }
                })
                .then( function(response)
                {
                    path = response.body;
                    me.loading = false;
                    return this.$set('path', JSON.parse(path));
                }, function (response){
                    console.log(response);
                });
        },
        createFolder: function ()
        {
            if( this.folder_name != '' )
            {
                data = {
                    _token : this.csrf_token,
                    folder_name : this.folder_name,
                    folder_id : this.current_folder_id
                };
                this.$http
                    .post('/api/filebrowser/folder/', data)
                    .then(function(response)
                    {
                        swal({
                            title: "Success! \n\""+this.folder_name+"\"\n Mappen er Oprettet",
                            timer: 1500,
                            type: 'success',
                            showConfirmButton: false
                        });
                        this.folder_name = '';
                        this.refresh(this.current_folder_id);
                    },
                    function (response) {
                        swal({
                            title: "Hovsa \n \""+this.folder_name+"\" \n findes allerede!",
                            type: 'error',
                            confirmButtonText: 'Det fikser jeg!',
                            showConfirmButton: true
                        });
                    });
            }else
            {
                swal({
                    title: "Hovsa! \n Du skal huske at give mappen et navn",
                    type: 'error',
                    confirmButtonText: 'Det fisker jeg!',
                    showConfirmButton: true
                });
            }
        },
        renameItem: function()
        {
            var me = this;
            swal({
                title: "Omdøbning",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                inputValue: me.selected_items[0].name
            }, function(inputValue) {
                if (inputValue === false) return false;
                if (inputValue === "")
                {
                    swal.showInputError("Du skal skrive noget!");
                    return false
                }
                data = {
                    _method : 'patch',
                    _token : me.csrf_token,
                    item : me.selected_items,
                    new_name: inputValue
                };
                me.$http
                    .post('/api/filebrowser/rename/', data)
                    .then( function(response)
                    {
                        me.refresh(me.current_folder_id);
                        swal("Omdøbt!", "Din fil er blevet Omdøbt!", "success");
                    }, function (response){
                        swal("Oops", "Der gik noget Galt", "error");
                    });
            });
        },
        deleteSelectedFiles: function()
        {
            var me = this;
            swal({
                title: "Er du sikker?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ja, Slet det!",
                cancelButtonText: "Nej, Jeg har ombestemt mig!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm)
                {
                    data = {
                        _method : 'delete',
                        _token : me.csrf_token,
                        items : me.selected_items
                    };
                    me.$http
                        .post('/api/filebrowser/deleteBundle/', data)
                        .then( function(response)
                        {
                            me.refresh(me.current_folder_id);
                            swal("Slettet!", "Dine filer er blevet slettet!", "success");
                        }, function (response){
                            swal("Oops", "Der gik noget Galt", "error");
                        });
                }else
                {
                    swal("Bare Rolig", "Der er ikke ændret noget :)", "error");
                }
            });
        },
        nextBreadcrumb: function(id)
        {
            this.breadcrumbs.push(id);
        },
        prevBreadcrumb: function()
        {
            this.breadcrumbs.pop();
        }
    },
    ready(){
        var me = this;
        // Initialize view ( get folders/files/breadcrumbs )
        // get folders
        me.getFolders(0);
        // get files
        me.getFiles(0);
        // get breadcrumbs
        me.getPath();

        var Dropzone = require("dropzone");

        Dropzone.options.dropzone = {
            init: function () {
                this.on("complete", function (file) {
                    if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0)
                    {
                        this.removeAllFiles();
                        me.refresh(me.current_folder_id);
                    }
                });
            }
        };
    }
}
</script>
