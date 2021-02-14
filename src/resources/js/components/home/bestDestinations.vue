<template>
    <section id="services" class="my-5 py-4">
        <div class="container">
            <div class="section-header">
                <h2 class="text-center">
                    Quelques Destinations preferes <br> de nos utilisateurs
                </h2>
            </div>
            <div class="row w-100 h-100">
                <div class="col-md-6">
                    <div class="block">
                        <span class="demonstration"></span>
                        <el-carousel height="400px">
                            <el-carousel-item v-for="item in from" :key="item.img">
                                <h2 class="text-item-color font-weight-bold text-center">{{ item.name }}</h2>
                                <el-image :src="item.img"></el-image>
                            </el-carousel-item>
                        </el-carousel>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block">
                        <span class="demonstration"></span>
                        <el-carousel trigger="click" height="400px">
                            <el-carousel-item v-for="item in to" :key="item.img">
                                <h2 class="text-item-color font-weight-bold text-center">{{ item.name }}</h2>
                                <el-image :src="item.img"></el-image>
                            </el-carousel-item>
                        </el-carousel>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

    export default {
        data: function () {
            return {
                from: [
                    {name: 'Douala', img: '/images/imgs/popularDestination/douala.png'},
                    {name: 'Yaounde', img: '/images/imgs/popularDestination/Yaounde_2.jpeg'},
                    {name: 'Paris', img: '/images/imgs/popularDestination/paris.jpeg'}
                ],
                to: [
                    {name: 'Paris', img: '/images/imgs/popularDestination/paris.jpeg'},
                    {name: 'Berlin', img: '/images/imgs/popularDestination/berlin.jpeg'},
                    {name: 'Yaounde', img: '/images/imgs/popularDestination/Yaounde_2.jpeg'}
                ]
            }
        }
    }

</script>

<style>
    .el-carousel__item h3 {
        color: #475669;
        font-size: 14px;
        opacity: 0.75;
        line-height: 150px;
        margin: 0;
    }

    .el-carousel__item:nth-child(2n) {
        background-color: transparent;
    }

    .text-item-color {
        color: #8bc73d;
    }

    .el-carousel__item:nth-child(2n+1) {
        background-color: transparent;
    }

    .el-image__error {
        display: none;
    }
</style>
