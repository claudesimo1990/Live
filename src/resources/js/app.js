require('./bootstrap');

import Vue from 'vue/dist/vue';

window.Vue = Vue;

import { BootstrapVue }  from 'bootstrap-vue';
import Notifications from 'vue-notification';
import VueTyperPlugin from 'vue-typer';
import { overlay } from "./store/overlay";

import ElementUI from 'element-ui';
import { App, plugin } from '@inertiajs/inertia-vue';
import { InertiaProgress } from '@inertiajs/progress';
import { Datetime } from 'vue-datetime'
import { ValidationProvider,ValidationObserver, extend } from 'vee-validate';

import { required,integer,numeric } from 'vee-validate/dist/rules';

//css
import 'element-ui/lib/theme-chalk/index.css';
import 'vue-datetime/dist/vue-datetime.css';


import moment0 from "moment";

window.moment = moment0;

InertiaProgress.init()

Vue.use(plugin)
Vue.use(BootstrapVue);
Vue.use(VueTyperPlugin);
Vue.use(Datetime);
Vue.use(ElementUI);
Vue.use(Notifications);

//vee-validate rules
extend('required', {
    ...required,
    message: 'ce champs est obligatoire'
});
extend('integer', {
    ...integer,
    message: 'ce champs est un entier'
});
extend('numeric', {
    ...numeric,
    message: 'ce champs est numeric'
});

require('./modules');

Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);
Vue.component('datetime', Datetime);

$(window).scroll(function(){
    if($(window).scrollTop() > 1){
        $('.quigo-animate-class-css-element').addClass('animate__animated animate__backInRight animate__delay-1s');
    } else {
        $('.quigo-animate-class-css-element').removeClass('animate__animated animate__backInRight animate__delay-1s');
    }
});

const el = document.getElementById('main')

if (el) {

    const site = new Vue({
        el: '#main',

        computed: {
            getShow: function() {
                return overlay.getters.OverlayShow;
            }
        }

    });

}

const app = document.getElementById('app')

if (app) {

    Vue.prototype.$route = route;

    new Vue({
        render: h => h(App, {
            props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => require(`./pages/${name}`).default,
            },
        }),
    }).$mount(app)

}

