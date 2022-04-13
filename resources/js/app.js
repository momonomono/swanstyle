import Vue from "vue";

Vue.component('menu-component',require('./pages/menu.vue').default);
Vue.component('top-component',require('./pages/top.vue').default);


const app = new Vue({
    el:"#app"
})