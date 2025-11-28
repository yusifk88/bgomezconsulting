import '../css/app.css';
import './bootstrap';


import {createInertiaApp} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {createApp, h} from 'vue';
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles'
import { VFileUpload } from 'vuetify/labs/VFileUpload'

import {createVuetify} from 'vuetify'
import AosVue from "aos-vue";

import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import {ZiggyVue} from '../../vendor/tightenco/ziggy';

const vuetify = createVuetify({
    components:{VFileUpload,components},
    directives,
    ssr: true,
    defaults: {
        VAppBar: {
            flat: true
        },
        VBtn: {
            color: "#1C315A",
            ripple: false,
            variant: "flat",
            style: 'text-transform: capitalize; cursor:pointer;',
            rounded: "lg"
        }
    }
});

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({el, App, props, plugin}) {
        return createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ZiggyVue)
            .use(vuetify)
            .use(AosVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
