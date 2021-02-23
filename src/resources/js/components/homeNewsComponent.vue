<template>
    <section v-if="posts.length > 0" id="services" class="home-news-section mb-5 p-5">
        <div class="container py-2">
            <div class="section-header quigo-animate-class-css-element">
                <h2 class="text-center title__annonce">
                    Les dernieres annonces
                </h2>
            </div>
            <el-carousel :interval="4000" height="500px" type="card">
                <el-carousel-item v-for="item in posts" :key="item.id">
                    <el-card class="box-card">
                        <div slot="header" class="clearfix d-flex align-items-center justify-content-center">
                            <img class="quigo-animate-class-css-element avatar" :src="item.user.default_avatar" alt="item.user.default_avatar">
                        </div>
                        <div class="text item">
                            <el-row>
                                <el-col :span="12">
                                    <div class="float-left quigo-animate-class-css-element">
                                        <div class="clearfix d-flex justify-content-between flex-column">
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                                <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                            </svg>
                                            <strong class="pt-1" v-html="item.from"></strong>
                                        </div>
                                    </div>
                                </el-col>
                                <el-col :span="12">
                                    <div class="float-right quigo-animate-class-css-element d-flex justify-content-between flex-column">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                        </svg>
                                        <strong class="pt-1" v-html="item.to"></strong>
                                    </div>
                                </el-col>
                            </el-row>
                            <el-row :gutter="12" class="my-4">
                                <el-col :span="12" class="px-3">
                                    <el-card shadow="always">
                                        <div class="d-flex justify-content-between quigo-animate-class-css-element">
                                            <div>
                                                <strong class="quigo-animate-class-css-element">{{ item.kilo }}Kg</strong>
                                            </div>
                                            <div>
                                                <strong class="quigo-animate-class-css-element">{{ item.prix }}</strong>
                                                <span class="fa fa-euro"></span> / KG
                                            </div>
                                        </div>
                                    </el-card>
                                </el-col>
                                <el-col :span="12" class="px-3">
                                    <el-card shadow="hover" class="text-uppercase text-center quigo-animate-class-css-element">
                                        <strong v-html="item.compagnie"></strong>
                                    </el-card>
                                </el-col>
                            </el-row>
                            <el-row :gutter="12" class="my-4">
                                <el-col :span="12" class="px-3">
                                    <el-card shadow="always">
                                        <div class="d-flex justify-content-between quigo-animate-class-css-element">
                                            <div>
                                                <strong class="quigo-animate-class-css-element">{{ item.kilo }} <span class="fa fa-envelope"></span></strong>
                                            </div>
                                            <div>
                                                <strong v-html="item.prix"></strong>
                                                <span class="fa fa-euro"></span> / <span class="fa fa-envelope"></span>
                                            </div>
                                        </div>
                                    </el-card>
                                </el-col>
                                <el-col :span="12" class="">
                                    <el-button class="quigo-animate-class-css-element p-4" @click="goToPath(item.Path)" round>Contactez le voyageur</el-button>
                                </el-col>
                            </el-row>
                        </div>
                        <div style="padding-top: 14px; border-top: 1px solid lightgray">
                            <div class="bottom clearfix d-flex justify-content-between align-items-center">
                                <el-image
                                    class="quigo-animate-class-css-element logo-post"
                                    style="width: 50px; height: 50px"
                                    src="/img/airport-100.png"
                                    fit="fit">
                                </el-image>
                                <time class="time">{{ item.createdAt }}</time>
                            </div>
                        </div>
                    </el-card>
                </el-carousel-item>
            </el-carousel>
        </div>
    </section>
</template>

<script>
import Avatar from 'vue-avatar'
export default {
    props: ["posts"],
    components: {
        Avatar
    },
    data: function () {
        return {
            lastNews: [],
            currentDate: new Date()
        };
    },
    mounted() {

    },
    methods: {
        goToPath(path) {
            window.location = path;
        }
    }
};
</script>

<style lang="scss" scoped>

.home-news-section {
    background-color: #e9ecef;
    margin-top: 30px;
    margin-bottom: 60px;
    padding: 50px;
}

.svg-icon {
    cursor: var(--icon-cursor, inherit);
    width: 30px;
    height: 30px;
    display: block;
    margin: var(--icon-margin, 5px);
    fill: var(--icon-color, #8bc73d);
    stroke: var(--icon-color, #8bc73d);
}

.bottom {
    margin-top: 13px;
    line-height: 12px;
}

.box-card {
    width: 100%;
    height: 100%;
}
.time {
    font-size: 18px;
    color: #999;
    position: absolute;
    bottom: 10px;
    right: 5px;
}
.logo-post {
    position: absolute;
    bottom: 10px;
    left: 5px;
}
.clearfix:before,
.clearfix:after {
    display: table;
    content: "";
}

.clearfix:after {
    clear: both
}
</style>
