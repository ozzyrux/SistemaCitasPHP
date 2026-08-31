//
import { createApp } from 'vue';
import CitasLista from './components/CitasLista.vue';
import App from './components/App.vue';

const app = createApp({});
app.component('app', App);
app.mount('#app');
