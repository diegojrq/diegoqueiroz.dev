<template>
  oi
</template>

<script>

import { getUser } from '../services/user.service';

export default {
    name: "HelloWorld",
    components: {},
    mixins: [],
    data() {
        return { 
          books: [],           
        }
    },
    created() {

      getUser(1).then((response) => {
        this.books = response.data;          
      });
        
    },
    methods: {        
    }
}
  
</script>
