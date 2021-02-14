<template>
<div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-9">
                <section>
                    <transition name="slide-fade">
                        <component :is="currentTabComponent"></component>
                    </transition>
                </section>
            </div>
            <div class="col-md-3 mt-5 py-5">
                <b-list-group class="mt-5">
                    <b-list-group-item v-bind:class="{ active: isActive_1, }" href="#" @click.prevent="changeImage(0)">Poster un voyage</b-list-group-item>
                    <b-list-group-item v-bind:class="{ active: isActive_2, }" href="#"  @click.prevent="changeImage(1)">Chercher un voyage</b-list-group-item>
                    <b-list-group-item v-bind:class="{ active: isActive_3, }" href="#" @click.prevent="changeImage(2)">Envoyer un colis</b-list-group-item>
                </b-list-group>
            </div>
        </div>
    </div>
</div>
</template>

<script>

import howPostTravel from './howPostTravel';
import findPostTravel from './findPostTravel';
import howPostPack from './howPostPack';

export default {
    props: ['title'],

    components: {
       howPostTravel,
       findPostTravel,
       howPostPack,
    },
    data: function () {
        return {
            current: '',
            images: [
                '/images/pack-bild-3.jpg',
                '/images/pack-bild.jpeg',
                '/images/pack-bild-2.jpg'
            ],
            titels: [
                "comment poster un voyage ?",
                "comment envoyer un colis ?",
                "Comment rechercher un trajet ?"
            ],

            titel: '',
            replace: '',
            img: '',
            isActive_1: true,
            isActive_2: false,
            isActive_3: false,

        }
    },
    computed: {
        getImg: function () {
            return this.img;

        },

        getTitle: function () {
            return this.titel;
        },
       currentTabComponent() {
            return this.current;
       },

    },
    watch: {
        current: function(val) {
        }
    },
    methods: {
        changeImage(index) {

            this.img = this.images[index];
            this.titel = this.titels[index];

            switch (index) {
                case 0:
                    this.isActive_1 = true;
                    this.isActive_2 = false;
                    this.isActive_3 = false;
                    this.current = howPostTravel;
                    break;
                case 1:
                    this.isActive_1 = false;
                    this.isActive_2 = true;
                    this.isActive_3 = false;
                    this.current = findPostTravel;
                    break;
                case 2:
                    this.isActive_1 = false;
                    this.isActive_2 = false;
                    this.isActive_3 = true;
                    this.current = howPostPack;
                    break;
            }

        },

    },

    mounted() {
        this.current = howPostTravel;
        this.titel = this.titels[0];
        this.img = this.images[0];
    },

}
</script>

<style lang="scss" scoped>
@import "./../../sass/_variables.scss";

.header-title {
    color: $quigo-second;
}

h1 {
    color: #fff;
    font-size: 50px;
    line-height: 95px;
    font-weight: 400;
    padding-top: 75px;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #8bc73d;
}
.list-group-item.active {
    background-color: $quigo;
    border-color: $quigo;
}

.nav-item {
    cursor: pointer;
}

.slide-fade-enter, .slide-fade-leave-to
 {
  transform: translateX(10px);
  opacity: 0;
}

</style>
