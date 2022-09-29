<template>
    <div>
        <PostsIndex :posts="posts"/>
    </div>
</template>

<script>
import PostsIndex from '../components/PostsIndex.vue';
import axios from 'axios';

export default {
    name: "App",
    components: {
        PostsIndex,
    },

    data : function(){
        
        return {
            posts : [],
        }
    },

    methods : {

        getPosts : function(){

            axios.get(`http://127.0.0.1:8000/api/posts`)
            .then((result) => {
                this.posts = result.data.results.data;
            })
            .catch((err) => {
                console.warn(err);
            })
        }
    },

    created(){
        this.getPosts();
    }

}
</script>

<style>

</style>