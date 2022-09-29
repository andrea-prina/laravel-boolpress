<template>
    <main>
        <ul class="list-unstyled">
            <li v-for="post in posts" :key="post.id">
                <PostCard :post="post"/>
            </li>
        </ul>
    </main>
</template>

<script>

import PostCard from '../components/PostCard.vue';
import axios from 'axios';

export default {

    name : 'Main',
    components : {
        PostCard,
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