<template>
    <div class="row">
        <div class="col-md-12">
            <button
                class="btn btn-default"
                @click="createPage"
            >
                Opret Side
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            Page List
            <ul>
                <li
                    v-for="page in pages"
                    @click=""
                >
                    <span class="pull-left page--id">{{ page.id }}</span>
                    <div class="pull-left page--name">{{ page.name }}</div>
                    <div class="text-grey page--route">{{ page.route }}</div>
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            Page Control
        </div>
    </div>
</template>
<style>

</style>
<script>
export default
{
    props:{
    },
    data(){
        return{
            
        }
    },
    computed: {
        
    },
    methods: {
        
    },
    ready(){
        
    }
}
</script>