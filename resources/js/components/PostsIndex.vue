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

import PostCard from './PostCard.vue';
export default {

    name : 'Main',
    components : {
        PostCard,
    },

    props : {
        posts : Array,
    }

}
</script>

<style>

</style>