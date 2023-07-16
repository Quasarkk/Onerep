import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createRouter, createWebHistory } from 'vue-router';

// Importez vos composants de vue ici
import Programs from './Pages/Programs.vue';
import ProgramDetails from './Pages/Program_details.vue';

const routes = [
    { path: '/', component: Programs },
    { path: '/programs/:id', component: ProgramDetails },
  ];

const router = createRouter({
    history: createWebHistory(),
    routes,
  });


import { createWebHistory, createRouter } from 'vue-router';

const routes = [
    { path: '/', component: ProgramsComponent },
    { path: '/programs/:id', component: ProgramDetailsComponent, props: true },
  ];

const router = createRouter({
    history: createWebHistory(),
    routes,
  });

const app = createApp(ProgramsComponent);
  app.use(router);
  app.mount('#app');

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

const app = createApp(App);
app.use(router);
app.mount('#app');

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
