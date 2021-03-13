<template>
    <section class="bg-page-header mb-4">
        <el-collapse v-for="el in fragen" :key="el.id" v-model="activeNames" @change="handleChange">
            <el-card class="box-card">
                <div slot="header" class="clearfix">
                    <h4 class="font-weight-bold" v-html="el.title"></h4>
                </div>
                <el-collapse-item v-for="item in el.Fragen" :key="item.id" :title="item.frage.frage" :name="item.id">
                    <div v-if="item.frage.array">
                        <em class="font-weight-bold mt-4" v-html="item.frage.title"></em>
                        <ul class="my-2">
                            <li v-for="ant in item.frage.antwort" :key="ant" v-html="ant"></li>
                        </ul>
                    </div>
                    <div v-else v-html="item.frage.antwort"></div>
                </el-collapse-item>
            </el-card>
        </el-collapse>
    </section>
</template>
<script>
    import faqs from "../../components/Data/faq";
    export default {
        data: function () {
            return {
                fragen: [],
                activeNames: ['1']
            }
        },
        created() {
            this.fragen = faqs.FAQ;
        },
        methods: {
            handleChange(val) {
                console.log(val);
            }
        }
    }
</script>
<style lang="scss">
    h4 {
        color: #0c2e8a;
        padding: 0;
        margin: 0;
    }
    .bg-page-header {
        background-color: rgb(233, 236, 239);
    }
    .el-collapse-item__header {
        font-size: 16px !important;
        font-weight: bold;
    }
</style>
