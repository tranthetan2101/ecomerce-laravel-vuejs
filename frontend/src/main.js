import Vue from 'vue'
import App from './App.vue'
import router from './router/router';
import "bootstrap";
import 'popper.js';
import 'jquery';
import "bootstrap/dist/css/bootstrap.min.css";
import store from "./store/index";

Vue.config.productionTip = false
Vue.component('bannerHome',require('./components/banner/BannerHome.vue').default);
Vue.component('productList',require('./components/product/Product.vue').default);
Vue.component('addToCart',require('./components/product/AddToCart.vue').default);
new Vue({
  render: h => h(App),
  router,
  store,
}).$mount('#app');