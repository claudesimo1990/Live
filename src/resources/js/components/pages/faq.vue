<template>
    <section class="bg-page-header mb-4">
        <div v-for="el in fragen" :key="el.id" class="col-md-12 faq">
            <h4 class="title my-4">{{el.title}}</h4>
            <div v-for="item in el.Fragen" :key="item.id">
                <button class="accordion">{{item.frage.frage}}</button>
                <div class="panel">
                    <div v-if="item.frage.array">
                        <em class="font-weight-bold mt-4" v-html="item.frage.title"></em>
                        <ul class="my-2">
                            <li v-for="ant in item.frage.antwort" :key="ant" v-html="ant"></li>
                        </ul>
                    </div>
                    <p v-else v-html="item.frage.antwort"></p>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import faqs from "../../components/Data/faq";
    export default {
        data: function () {
            return {
                fragen: []
            }
        },
        created() {
            this.fragen = faqs.FAQ;
        }
    }
</script>
<style lang="scss" scoped>
    p{
        color: black !important;
        padding: 6px 19px 14px 16px;
    }
    .accordion {
        color: black;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        outline: none;
        transition: 0.4s;
    }
    .active, .accordion:hover {
        background-color: #ccc;
    }
    .active:after {
        content: "\2212";
    }
    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    .title {
        margin-bottom: 20px;
        color: #8bc73d;
        text-align: center;
    }
    ul {
        list-style: none;
        padding: 0;
    }
    li {
        padding-left: 1.3em;
    }
    li:before {
    content: "\f00c"; /* FontAwesome Unicode */
        font-family: FontAwesome;
        display: inline-block;
        margin-left: -1.3em; /* same as padding-left set on li */
        width: 1.3em; /* same as padding-left set on li */
        color:#8bc73d;
    }
</style>