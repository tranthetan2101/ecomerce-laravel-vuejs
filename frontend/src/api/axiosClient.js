import Axios from 'axios';
import queryString from 'query-string';
const axiosClient = Axios.create({
    baseURL: "http://localhost:8000/api",
    headers: {
        "Content-type": "application/json"
    },
    paramsSerializer: params => queryString.stringify(params)
});
axiosClient.interceptors.request.use(async (config) => {
// Handle token here ...
    return config;
})
export default axiosClient;