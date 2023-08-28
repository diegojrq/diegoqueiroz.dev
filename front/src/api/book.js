import api from './index';

const getBooks = () => api.get('books');

export {    
    getBooks,
}
