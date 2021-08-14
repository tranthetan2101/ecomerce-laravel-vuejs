import axiosClient from "./axiosClient";
class ProductApi {
    getAll = () => {
        const url = '/product/index';
        return axiosClient.get(url);
    };
    detailID = (id)=>{
        return axiosClient.get(`product/show/${id}`);
    }
}
const productApi = new ProductApi();
export default productApi;