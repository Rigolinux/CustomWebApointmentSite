import './bootstrap';
import '../css/app.css';
import 'element-plus/theme-chalk/dark/css-vars.css'
import { createApp, h, DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { locale } from 'devextreme/localization';
//use spanish locale


//using element plus
import es from 'element-plus/es/locale/lang/es'
import ElementPlus from 'element-plus'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
locale(navigator.language);

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(ElementPlus, { locale: es })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
