import VueRouter from 'vue-router';
import Index from './components/Index';
import NewGame from './components/NewGame';

export default new VueRouter({
    routes: [
        {
            path: '/',
            component: Index
        },
        {
            path: '/new',
            component: NewGame
        }
    ],
    mode: 'history'
});
