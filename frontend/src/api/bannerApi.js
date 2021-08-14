import axiosClient from "./axiosClient";
class BannerApi{
    getAll = () =>{
        const url = '/banner/index';
        return axiosClient.get(url);
    }
}
const bannerApi = new BannerApi();
export default bannerApi;