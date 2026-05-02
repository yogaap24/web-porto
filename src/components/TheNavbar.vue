<template>
    <header class="navbar" :class="{ 'navbar--scrolled': isScrolled }">
        <div class="container">
            <a href="#home" class="navbar__logo" @click.prevent="scrollTo('home')" aria-label="Go to top">
                <div class="logo-mark">YAP</div>
            </a>

            <nav class="navbar__menu" :class="{ 'navbar__menu--open': menuOpen }" id="main-nav" aria-label="Main navigation">
                <ul role="list">
                    <li v-for="item in navItems" :key="item.id">
                        <a
                            :href="`#${item.id}`"
                            class="navbar__link"
                            :class="{ 'navbar__link--active': activeSection === item.id }"
                            @click.prevent="handleNavClick(item.id)"
                            :aria-current="activeSection === item.id ? 'page' : undefined"
                        >{{ item.label }}</a>
                    </li>
                </ul>
            </nav>

            <div class="navbar__actions">
                <!-- Theme Toggle -->
                <button
                    class="theme-toggle"
                    @click="toggleTheme"
                    :aria-label="isLight ? 'Switch to dark mode' : 'Switch to light mode'"
                    type="button"
                    :title="isLight ? 'Dark mode' : 'Light mode'"
                >
                    <Transition name="icon-fade" mode="out-in">
                        <!-- Sun icon (shown in dark mode = switch to light) -->
                        <svg v-if="!isLight" key="sun" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <!-- Moon icon (shown in light mode = switch to dark) -->
                        <svg v-else key="moon" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </Transition>
                </button>

                <a href="https://wa.me/62881080002564" target="_blank" rel="noopener noreferrer" class="navbar__cta" aria-label="Contact via WhatsApp">
                    Hire Me
                </a>

                <button
                    class="navbar__toggle"
                    :class="{ 'navbar__toggle--open': menuOpen }"
                    @click="menuOpen = !menuOpen"
                    :aria-expanded="String(menuOpen)"
                    aria-controls="main-nav"
                    aria-label="Toggle navigation"
                    type="button"
                >
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const isScrolled = ref(false)
const menuOpen = ref(false)
const activeSection = ref('home')
const isLight = ref(document.documentElement.classList.contains('light'))

const navItems = [
    { id: 'about', label: 'About' },
    { id: 'projects', label: 'Projects' },
    { id: 'personal-projects', label: 'Personal' },
]

function toggleTheme() {
    isLight.value = !isLight.value
    document.documentElement.classList.toggle('light', isLight.value)
    localStorage.setItem('theme', isLight.value ? 'light' : 'dark')
}

function scrollTo(id) {
    document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' })
    menuOpen.value = false
}

function handleNavClick(id) {
    scrollTo(id)
    activeSection.value = id
}

function handleScroll() {
    isScrolled.value = window.scrollY > 60
    const sections = ['home', 'about', 'projects', 'personal-projects']
    for (const id of [...sections].reverse()) {
        const el = document.getElementById(id)
        if (el && window.scrollY >= el.offsetTop - 130) {
            activeSection.value = id
            break
        }
    }
}

onMounted(() => window.addEventListener('scroll', handleScroll, { passive: true }))
onUnmounted(() => window.removeEventListener('scroll', handleScroll))
</script>

<style scoped>
.navbar {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    padding: 1rem 0;
    transition: background 0.3s, box-shadow 0.3s, padding 0.3s, backdrop-filter 0.3s;
}

.navbar--scrolled {
    background: color-mix(in srgb, var(--bg-base) 85%, transparent);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 1px 0 var(--border);
    padding: 0.75rem 0;
}

.container {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 1.5rem;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

/* Logo */
.navbar__logo { text-decoration: none; }

.logo-mark {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 900;
    color: #fff;
    letter-spacing: 0.05em;
    transition: transform 0.2s;
}

.navbar__logo:hover .logo-mark { transform: rotate(-5deg) scale(1.05); }

/* Nav */
.navbar__menu { margin-left: auto; }

.navbar__menu ul {
    display: flex;
    list-style: none;
    gap: 0.125rem;
}

.navbar__link {
    display: block;
    padding: 0.45rem 0.875rem;
    color: var(--text-secondary);
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 500;
    border-radius: 8px;
    transition: color 0.2s, background 0.2s;
}

.navbar__link:hover { color: var(--text-primary); background: var(--border); }
.navbar__link--active { color: var(--accent) !important; background: var(--accent-glow); }

/* Actions */
.navbar__actions {
    display: flex;
    align-items: center;
    gap: 0.625rem;
}

/* Theme toggle */
.theme-toggle {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    border: 1px solid var(--border);
    background: var(--bg-surface);
    color: var(--text-secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: color 0.2s, border-color 0.2s, background 0.2s, transform 0.2s;
}

.theme-toggle:hover {
    color: var(--accent);
    border-color: var(--accent);
    background: var(--accent-glow);
    transform: rotate(20deg);
}

.icon-fade-enter-active,
.icon-fade-leave-active { transition: opacity 0.15s, transform 0.15s; }
.icon-fade-enter-from { opacity: 0; transform: rotate(-30deg) scale(0.7); }
.icon-fade-leave-to { opacity: 0; transform: rotate(30deg) scale(0.7); }

/* CTA */
.navbar__cta {
    padding: 0.45rem 1.125rem;
    background: var(--accent);
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-size: 0.8125rem;
    font-weight: 700;
    letter-spacing: 0.02em;
    transition: opacity 0.2s, transform 0.2s;
    white-space: nowrap;
}

.navbar__cta:hover { opacity: 0.85; transform: translateY(-1px); }

/* Hamburger */
.navbar__toggle {
    display: none;
    flex-direction: column;
    gap: 5px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px;
}

.navbar__toggle span {
    display: block;
    width: 22px;
    height: 2px;
    background: var(--text-primary);
    border-radius: 2px;
    transition: transform 0.3s, opacity 0.3s;
}

.navbar__toggle--open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.navbar__toggle--open span:nth-child(2) { opacity: 0; }
.navbar__toggle--open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

@media (max-width: 768px) {
    .navbar__cta { display: none; }
    .navbar__toggle { display: flex; }

    .navbar__menu {
        position: fixed;
        inset: 0;
        background: color-mix(in srgb, var(--bg-base) 97%, transparent);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
        margin-left: 0;
    }
    .navbar__menu--open { opacity: 1; pointer-events: all; }
    .navbar__menu ul { flex-direction: column; align-items: center; gap: 0.25rem; }
    .navbar__link { font-size: 1.25rem; padding: 0.75rem 2rem; }
}
</style>
