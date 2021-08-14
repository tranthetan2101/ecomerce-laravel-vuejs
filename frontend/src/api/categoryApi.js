import axiosClient from "./axiosClient";
class CategoryApi{
    getAll = () =>{
        const url = '/category/index';
        return axiosClient.get(url);
    }
}
const categoryApi = new CategoryApi();
export default categoryApi;