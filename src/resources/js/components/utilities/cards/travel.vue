<template>
<div class="card runde-ecke">
        <div class="row shadow">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pb-5">
               <userProfile :user="item.user" :asset="asset" :post-date="item.created_at"></userProfile>
                <div class="icon--card">
                    <img :src="item.categorie_id == 1 ? '/img/cube-outline.svg' : '/img/icons8-airport-100.png'" class="mt-2" alt="SVG mit img Tag laden" width="50" height="50" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <ul class="timeline">
                    <li>
                        <a target="_blank" href="#">{{ item.from }}</a>
                        <a href="#" class="float-right pr-4">{{ item.dateFrom }}</a>
                    </li>
                    <li>
                        <a href="#">{{ item.to }}</a>
                        <a href="#" class="float-right pr-4">{{ item.dateTo }}</a>
                    </li>
                </ul>
                <hr>
                <div class="notice notice-warning">
                    <h6>Kilo disponibles : <b-badge variant="info" class="mx-2 si" v-html="item.kilo+ ' kg'"></b-badge><span class="float-right kilo-price">{{ item.prix }}€</span></h6>
                </div>
                <div class="notice notice-warning mt-1">
                    <strong>Message : </strong>
                    <div class="text-break overflow-auto text-muted bg-white border rounded mb-4 mt-1 px-2">
                        {{ item.content }}
                    </div>
                </div>
                <div class="notice notice-success text-right">
                    <a :href="item.Path" class="btn btn-primary w-100 btn-recherche contact-btn">
                        Contactez le voyageur
                    </a>
                </div>
                <div class="float-right"><h6>
                    <el-tooltip content="Partager le Post" placement="top">
                        <el-button><i class="el-icon-share font-weight-bold"></i></el-button>
                    </el-tooltip>
                </h6></div>
            </div>
        </div>
    </div>
</template>

<script>

import userProfile from './user'

export default {
    props: ['item','asset'],
    components: {
        userProfile
    }

}
</script>

<style>

</style>
