import Vue from 'vue'
import App from "./components/App";

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: { App }
});