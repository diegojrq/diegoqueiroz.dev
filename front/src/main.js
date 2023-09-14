/**
 * main.js
 *
 * Bootstraps Vuetify and other plugins then mounts the App`
 */

// Components
import App from './App.vue'

// Composables
import { createApp } from 'vue'
import { createI18n } from 'vue-i18n'

// Plugins
import { registerPlugins } from '@/plugins'

// Cunstom Installers
import { i18n } from '@/i18n/i18n.js';

const i18nInstaller = i18n();

const app = createApp(App)
app.use(i18nInstaller)

registerPlugins(app)

app.mount('#app')
