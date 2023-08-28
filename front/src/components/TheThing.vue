<template>
  <div>
    <h1>Thing</h1>
  </div>
</template>

<script>

import { getBooks } from "../api/book";

export default {
  name: "TheThing",
  components: {  },
  props: {
    orgao: {
        type: Number,
        default: 3,
    },
  },
  mixins: [],
  data() {
    return {
        error: null,
    }
  },
  created() {
    this.pegaBooks()
  },
  methods: {
    pegaBooks() {
      getBooks()
      .then(response => {
        console.log(response.data)
      })
      .catch(error => {
        console.log(error)        
      })
      .finally(console.log('finalizado'))
    },
    salvar() {
      console.log('salvar')
    },
    voltar() {           
      console.log('voltar')
    },
  },
}

</script>