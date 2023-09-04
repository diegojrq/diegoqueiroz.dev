import api from './api';

const getBooks = () => api.get('books');

export {    
    getBooks,
}
