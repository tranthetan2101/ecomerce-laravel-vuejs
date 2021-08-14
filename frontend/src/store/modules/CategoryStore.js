import categoryApi from "../../api/categoryApi";
const categoryModule = {
    state:{
        categorys:[]
    },
    getters:{
        categorys: state =>state.categorys,
    },
    action:{
        async getCategory({commit}){
            try{
                const response = await categoryApi.getAll();
                commit('SET_CATEGORYS',response.data);
            }catch (error){
                console.log(error);
            }
        }
    },
    mutations:{
        SET_CATEGORYS(state, categorys) {
            state.categorys = categorys;
        },
    }
}
export default categoryModule;