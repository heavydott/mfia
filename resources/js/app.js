window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import router from './router';
import App from './components/App';

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});
