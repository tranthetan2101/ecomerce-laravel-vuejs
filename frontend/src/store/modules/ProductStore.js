import productApi from "../../api/productApi";
const productModule = {
    state:{
        products:[],
        product: null
    },
    getters: {
        products: state => state.products,
        product: state => state.product,
    },
    actions:{
        async getProduct({commit}){
            try {
                const response = await productApi.getAll();
                commit('SET_PRODUCTS', response.data)
                console.log(response.data);
            } catch (error) {
                console.log(error)
            }
        },
        async getProductid({commit},productId){
            try{
                await productApi.detailID(productId).then(response =>{
                    this.product = response.data;
                    commit('SET_PRODUCT', response.data);
                    console.log(response.data);
                });
            }catch (error){
                console.log(error);
            }
        }
    },
    mutations:{
        SET_PRODUCTS(state, products) {
            state.products = products
        },
        SET_PRODUCT(state,product){
            state.product = product;
        }
    }
}
export default productModule;