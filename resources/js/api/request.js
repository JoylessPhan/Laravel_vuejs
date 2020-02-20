import {apiRequest} from "../helpers/apiRequest";
import {apiMethod} from "../constants/apiMethod";
import {buildUrl} from "../helpers/buildUrl";

export const showRequest = (id) => {
    return new Promise(
        (resolve, reject) => {
            apiRequest('/api/request-off/'+id)
                .then(res => resolve(res))
                .catch(function (error) {
                    reject(error)
                })
        }
    )
};

export const deleteRequest = (id) => {
    return new Promise(
        (resolve, reject) => {
            apiRequest('/api/request-off/'+id, apiMethod.delete)
                .then(res => resolve(res))
                .catch(function (error) {
                    reject(error)
                })
        }
    )
};

export const createRequest = (formData) => {
    return new Promise(
        (resolve, reject) => {
            apiRequest('/api/request-off', apiMethod.post, formData)
                .then(res => resolve(res))
                .catch(function (error) {
                    reject(error)
                });
        }
    )
};

/*export const searchEmail = (params) => {
    return new Promise(
        (resolve, reject) => {
            apiRequest('api/search' + buildUrl(params))
                .then(res => console.log(res))
                .catch(function (error) {
                    reject(error)
                })
        }
    )
};*/
