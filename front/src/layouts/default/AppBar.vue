

<template>
  <v-app-bar
    title="diegoQueiroz.dev">
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/books">Books</RouterLink>
      <RouterLink to="/login">Login</RouterLink>
      <RouterLink to="/register">{{ $t("message.hello") }}</RouterLink>
      
      <div class="div-locale"
        @click="setLocale('en-us')">
          <country-flag
            country='us'             
            size='big'
          />
      </div>
      <div class="div-locale"
        @click="setLocale('pt-br')">
          <country-flag
            country='br'
            size='big'
          />
      </div>
  </v-app-bar>
</template>

<script>

import CountryFlag from 'vue-country-flag-next'

export default {
  name: "AppBar",
  components: { CountryFlag },
  mixins: [],
  data() {
    return {      
    }
  },
  methods: {
    setLocale(locale) {
      const oldLocale = this.$i18n.locale;
      localStorage.setItem('locale', locale);
      this.$i18n.locale = localStorage.getItem('locale') || 'en-us';

      if (oldLocale != localStorage.getItem('locale')) {
        this.$router.go();        
      }
    }
  }
}

</script>

<style scoped lang="scss">

.flag {
  border-radius: 4px;
  border: 1px solid #dee2e6;
}

.div-locale {
  cursor: pointer;
  margin-right: 8px;
}



</style>