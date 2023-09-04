<template>
  <v-card
    class="mx-auto"
    max-width="600"
  >
    <v-list lines="two">      
      <v-list-subheader inset>Folders</v-list-subheader>

      <v-list-item
        v-for="book in books"
        :key="book.name"
        :title="book.name"
        :subtitle="book.author"
      >
        <template v-slot:prepend>
          <v-avatar color="grey-lighten-1">
            <v-icon color="white">mdi-folder</v-icon>
          </v-avatar>
        </template>

        <template v-slot:append>
          <v-btn
            color="grey-lighten-1"
            icon="mdi-information"
            variant="text"
          ></v-btn>
          <v-btn
            color="grey-lighten-1"
            icon="mdi-information"
            variant="text"
          ></v-btn>
        </template>
        
      </v-list-item>
     
    </v-list>
  </v-card>
</template>

<script>

import { getBooks } from '../../services/book.service';

export default {
    name: "BookList",
    components: {},
    mixins: [],
    data() {
        return { 
          books: [],           
        }
    },
    created() {

      getBooks().then((response) => {
        this.books = response.data;          
      });
        
    },
    methods: {        
    }
}
  
</script>
