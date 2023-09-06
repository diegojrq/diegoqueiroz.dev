import api from './api';

const getUser = (user) => api.get(`users/${user}`);

export {    
    getUser,
}
