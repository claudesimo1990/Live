<template>
    <section id="intro" :style="{ backgroundImage: `url('${backgroundImage}')`,  'height':  '400px' }">
        <div class="intro-content mt-0">
            <h2 class="text-center title__annonce pt-2 text-white">{{ title }}</h2>
        </div>
    </section><!-- #intro -->
</template>
<script>
export default {
    props: ['backgroundImage', 'title']
}
</script>

<style lang="scss" scoped>
@import "./../../../sass/_variables.scss";
@import "~bootstrap/scss/bootstrap";


.header--element {
    @extend .bg-success, .text-white, .w-50;
}
h1{
    @extend .font-weight-bold;
}
</style>