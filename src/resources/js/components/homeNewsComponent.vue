<template>
    <section v-if="lastNews.length > 0" id="services" class="home-news-section mb-5 p-5">
        <div class="container py-2">
            <div class="section-header quigo-animate-class-css-element">
                <h2 class="text-center title__annonce">
                    Les dernieres annonces
                </h2>
            </div>
            <el-carousel :interval="4000" height="500px" type="card">
                <el-carousel-item v-for="item in 6" :key="item">
                    <el-card class="box-card">
                        <div slot="header" class="clearfix">
                            <el-image
                                class="quigo-animate-class-css-element"
                                style="width: 50px; height: 50px"
                                src="/img/cube-outline.svg"
                                fit="fit">
                            </el-image>
                            <avatar class="float-right quigo-animate-class-css-element" username="Jane Doe"></avatar>
                        </div>
                        <div class="text item">
                            <el-row>
                                <el-col :span="12">
                                    <div class="float-left quigo-animate-class-css-element">
                                        <div class="clearfix">
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                                <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                            </svg>
                                        </div>
                                        <strong>Douala</strong>
                                    </div>
                                </el-col>
                                <el-col :span="12">
                                    <div class="float-right quigo-animate-class-css-element">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                        </svg>
                                        <strong>Douala</strong>
                                    </div>
                                </el-col>
                            </el-row>
                            <el-row :gutter="12" class="my-4">
                                <el-col :span="12" class="px-3">
                                    <el-card shadow="always">
                                        <div class="d-flex justify-content-between quigo-animate-class-css-element">
                                            <div>
                                                <strong class="quigo-animate-class-css-element">10Kg</strong>
                                            </div>
                                            <div>
                                                <strong class="quigo-animate-class-css-element">10</strong>
                                                <span class="fa fa-euro"></span> / KG
                                            </div>
                                        </div>
                                    </el-card>
                                </el-col>
                                <el-col :span="12" class="px-3">
                                    <el-card shadow="hover" class="text-uppercase text-center quigo-animate-class-css-element">
                                        <strong>Air France</strong>
                                    </el-card>
                                </el-col>
                            </el-row>
                            <el-row :gutter="12" class="my-4">
                                <el-col :span="12" class="px-3">
                                    <el-card shadow="always">
                                        <div class="d-flex justify-content-between quigo-animate-class-css-element">
                                            <div>
                                                <strong class="quigo-animate-class-css-element">10 <span class="fa fa-envelope"></span></strong>
                                            </div>
                                            <div>
                                                <strong>10</strong>
                                                <span class="fa fa-euro"></span> / <span class="fa fa-envelope"></span>
                                            </div>
                                        </div>
                                    </el-card>
                                </el-col>
                                <el-col :span="12" class="">
                                    <el-button class="quigo-animate-class-css-element p-4" round>Contactez le voyageur</el-button>
                                </el-col>
                            </el-row>
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
    props: ["news"],
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
        this.lastNews = this.news;
    },
    methods: {
        goToPath(path) {
            console.log(path);
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
    margin: var(--icon-margin, 0);
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
    font-size: 13px;
    color: #999;
    position: absolute;
    bottom: 10px;
    right: 5px;
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
