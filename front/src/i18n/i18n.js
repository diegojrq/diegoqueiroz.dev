import { createI18n } from 'vue-i18n';
import messages from './messages';

export function i18n() {
  
  const i18n = createI18n({
    locale: localStorage.getItem('locale') || 'en-us',
    fallbackLocale: 'pt-br',
    messages,
  });
  
  return i18n;
}
