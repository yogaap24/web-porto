import { createApp } from 'vue'
import { createRouter, createWebHashHistory } from 'vue-router'
import App from './App.vue'
import './style.css'

// Restore saved theme
const savedTheme = localStorage.getItem('theme')
if (savedTheme === 'light') document.documentElement.classList.add('light')

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        { path: '/', component: () => import('./views/HomeView.vue') },
    ],
    scrollBehavior(to) {
        if (to.hash) return { el: to.hash, behavior: 'smooth' }
        return { top: 0, behavior: 'smooth' }
    },
})

const app = createApp(App)
app.use(router)
app.mount('#app')
