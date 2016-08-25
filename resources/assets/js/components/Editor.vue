<template>
    <pre id="editor"></pre>
</template>
<style>
    #editor{
        height: 200px;
    }
</style>
<script>
export default
{
    data(){
        return{
            
        }
    },
    computed: {
        
    },
    methods: {
        
    },
    events: {
        'update-editor': function (content) {
            if(content == undefined)
            { content = ''; }
            editor.setValue(content,-1);
        }
    },
    ready(){

        ace_editor = require('brace');
        require('brace/mode/html');
        require('brace/theme/twilight');

        editor = ace_editor.edit('editor');
        ace_editor.config.set("basePath", "/js/vendor/AceEditor");
        editor.getSession().setMode('ace/mode/html');
        editor.setTheme('ace/theme/twilight');
        editor.$blockScrolling = Infinity;
    }
}
</script>