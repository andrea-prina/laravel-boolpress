<template>
    <div class="d-flex justify-content-center">
        <div class="card my-3 text-center" style="width: 30rem">
            <img class="card-img-top" :src="post.post_image" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">
                {{post.post_content}}
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ post.post_date }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        post: Object,
    },
};
</script>

<style>
</style>