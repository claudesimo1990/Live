require('./bootstrap');
window.Vue = require('vue');
const Vuex = require('vuex');

import Notifications from 'vue-notification';
import { Datetime } from 'vue-datetime'
import {BootstrapVue, BootstrapVueIcons}  from 'bootstrap-vue';
import VueTyperPlugin from 'vue-typer'
import VueLetterAvatar from 'vue-letter-avatar';
import module from './store/store';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-default.css';
import 'vue-datetime/dist/vue-datetime.css';
import { ValidationProvider,ValidationObserver, extend } from 'vee-validate';
import { required,integer,numeric } from 'vee-validate/dist/rules';
import vueCountryRegionSelect from 'vue-country-region-select';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

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

window.moment = require('moment');

Vue.use(VueToast);
Vue.use(VueLetterAvatar);
Vue.use(Notifications);
Vue.use(BootstrapVue);
Vue.use(BootstrapVueIcons);
Vue.use(VueTyperPlugin);
Vue.use(Vuex);
Vue.use(vueCountryRegionSelect);

window.Store = new Vuex.Store(module);

Vue.use(Datetime);
Vue.use(ElementUI);

$('#myCarousel').carousel({
  interval: 3000,
});

// Global register
Vue.component('news', require('./components/newsComponent.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('home-news-component', require('./components/homeNewsComponent.vue').default);
Vue.component('how-it-works-component', require('./components/howItWorksComponent.vue').default);
Vue.component('coli-component', require('./components/posts/coli.vue').default);
Vue.component('travel-component', require('./components/posts/travel.vue').default);
Vue.component('booking-travel-component', require('./components/booking/travel.vue').default);
Vue.component('booking-coli-component', require('./components/booking/coli.vue').default);
Vue.component('search-component', require('./components/search/search.vue').default);
Vue.component('results-component', require('./components/search/results.vue').default);
Vue.component('how-work', require('./components/home/howWork.vue').default);
Vue.component('how-it-work', require('./components/howWork.vue').default);
Vue.component('about', require('./components/home/about.vue').default);
Vue.component('teams', require('./components/home/teams.vue').default);
Vue.component('destinations', require('./components/home/bestDestinations.vue').default);
Vue.component('profile-component', require('./components/profile/profile.vue').default);
Vue.component('chat', require('./components/messages/chat.vue').default);
Vue.component('notification', require('./components/home/notifications.vue').default);
Vue.component('testimonials', require('./components/home/testimonials.vue').default);
Vue.component('header-component', require('./components/utilities/header.vue').default);
Vue.component('faq-component', require('./components/pages/faq.vue').default);
Vue.component('contact-us', require('./components/pages/contact.vue').default);
Vue.component('datetime', Datetime);
Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);
Vue.component('cookie-component', require('./components/utilities/cookie.vue').default);
Vue.component('alert-chat', require('./components/messages/alertChat.vue').default);
Vue.component('activ-user', require('./components/stats/activUser.vue').default);
Vue.component('home-header-component', require('./components/utilities/Homeheader').default);
Vue.component('card-user', require('./components/utilities/cards/profile.vue').default);
Vue.component('show-images', require('./components/utilities/cards/showImages').default);
Vue.component('register-form', require('./components/auth/register').default);

window.app = new Vue({
    el: '#app',

    computed: {
      getShow: function() {
        return Store.state.OverlayShow;
      }
    }
});
