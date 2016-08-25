<div class="filebrowser--items">
    <ul class="filebrowser--list">
        @foreach($folders as $folder)
        <li class="filebrowser--item filebrowser--folder" v-on:dblclick="goToFolder({{$folder->id}})">
            {{ $folder->name }}
            <ul>
                @foreach($folder->files as $file)
                    <li>
                        {{ $file->name }}
                    </li>
                @endforeach
            </ul>
        </li>
        @endforeach
        @foreach($files as $file)
        <li class="filebrowser--item">
            {{ $file->name }}
        </li>
        @endforeach
    </ul>
</div>

<style lang="sass">
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
    border: 1px solid whitesmoke;
    border-radius: 2px;
    border-bottom: 2px solid rgb(73, 77, 77);
}
.filebrowser--item {
    display: inline-block;
    border: 2px solid #dddddd;
    padding: 5px;
    margin: 10px;
    width: calc(100% * (1 / 4) - 20px);
    height: 100px;
}
.filebrowser--folder{
    border: 2px solid black;
}
</style>

<div class="filebrowser--dropzone">
    <form action="/file" id="dropzone" class="dropzone">
        {{csrf_field()}}
      <input type="hidden" name="folder_id" value="{{ $current_folder_id }}">
      <div class="fallback">
        <input name="file" type="file" multiple />
      </div>
    </form>
</div>
<script type="text/javascript">
var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
</script>