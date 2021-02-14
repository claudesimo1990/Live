<template>
    <header class="masthead" :style="{ backgroundImage: `url('${backgroundImage}')`,  'height':  '800px' }">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center border d-flex justify-content-center align-item-center shadow-none header-bg-light rounded">
                    <div class="intro-content my-3">
                        <search></search>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    import search from '../search/search'
    export default {
        components: {search},
        props: ['backgroundImage']
    }

</script>

<style lang="scss" scoped>
    @import "./../../../sass/_variables.scss";
    @import "~bootstrap/scss/bootstrap";


    .masthead {
        height: 100vh;
        min-height: 500px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
