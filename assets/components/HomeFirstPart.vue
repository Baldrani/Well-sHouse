<template>
    <div>
        <!-- tester blur -->
        <img :src="imgFirstPart" alt="C'est moi">
        <social-media></social-media>
    </div>
</template>
<script>
    import SocialMedia from './SocialMedia.vue';

    export default {
        props:['imgFirstPart'],
        components: {
            SocialMedia,
        }
    }


</script>