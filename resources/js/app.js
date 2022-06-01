import Vue from "vue";
import VueCookies from "vue-cookie";

Vue.use(VueCookies);

Vue.component('header-component',require('./components/Header/Header.vue').default);
Vue.component('footer-component',require('./components/Footer/Footer.vue').default);

Vue.component('menu-component',require('./pages/menu.vue').default);
Vue.component('top-component',require('./pages/top.vue').default);
Vue.component('contact-component',require('./pages/contact.vue').default);
Vue.component('news-component',require('./pages/news.vue').default);


const app = new Vue({
    el:"#app",
})