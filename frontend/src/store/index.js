import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);
import productStore from "./modules/ProductStore";
const storeData = {
    modules:{
        productStore
    }
}
const store = new Vuex.Store(storeData);
export default store;