import { defineStore } from 'pinia'
import { useStorage } from '@vueuse/core'

export const useLocaleStore = defineStore('locale', {
  state: () => ({
    locale: useStorage('locale', 'en-us')
  }),
  getters: {
    getLocale: (state) => state.locale,
  },
  actions: {
    setLocale(locale) {
      this.locale = locale;
    },
  },
})
