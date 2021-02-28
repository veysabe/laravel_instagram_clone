<template>
    <div>
        <button class="btn btn-primary ml-3" @click="followUser">Подписаться</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser() {
                alert('inside');
            }
        }
    }
</script>
