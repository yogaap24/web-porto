<template>
    <Transition name="drawer">
        <div v-if="project" class="backdrop" @click.self="$emit('close')" role="dialog" :aria-label="project.title" aria-modal="true">
            <div class="drawer">
                <div class="drawer__head">
                    <button class="btn-close" @click="$emit('close')" aria-label="Close" type="button">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </button>
                    <span class="drawer__label">Project Detail</span>
                </div>

                <div class="drawer__body">
                    <h2 class="drawer__title">{{ project.title }}</h2>

                    <div class="carousel" v-if="project.images.length">
                        <img :src="project.images[activeImg]" :alt="`${project.title} #${activeImg+1}`" class="carousel__img" loading="lazy"/>
                        <div class="carousel__nav" v-if="project.images.length > 1">
                            <button @click="prev" class="nav-btn" type="button" aria-label="Prev"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg></button>
                            <div class="dots">
                                <button v-for="(_,i) in project.images" :key="i" class="dot" :class="{'dot--on': i===activeImg}" @click="activeImg=i" :aria-label="`Image ${i+1}`" type="button"></button>
                            </div>
                            <button @click="next" class="nav-btn" type="button" aria-label="Next"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg></button>
                        </div>
                    </div>

                    <section class="section">
                        <h3 class="section__title">About</h3>
                        <p class="section__text">{{ project.about }}</p>
                    </section>

                    <section class="section">
                        <h3 class="section__title">Tech Stack</h3>
                        <div class="stacks">
                            <span v-for="s in project.stacks" :key="s" class="stack">{{ s }}</span>
                        </div>
                    </section>

                    <section class="section links">
                        <a v-if="project.website" :href="project.website" target="_blank" rel="noopener noreferrer" class="link-btn link-btn--primary">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="currentColor" stroke-width="2"/></svg>
                            Live Site
                        </a>
                        <a v-if="project.github" :href="project.github" target="_blank" rel="noopener noreferrer" class="link-btn link-btn--ghost">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.63-5.373-12-12-12z"/></svg>
                            GitHub
                        </a>
                        <p v-if="!project.website && !project.github" class="private-note">Private / Internal Project</p>
                    </section>
                </div>
            </div>
        </div>
    </Transition>
</template>

<script setup>
import { ref, watch } from 'vue'
const props = defineProps({ project: { type: Object, default: null } })
defineEmits(['close'])
const activeImg = ref(0)
watch(() => props.project, (v) => {
    activeImg.value = 0
    document.body.style.overflow = v ? 'hidden' : ''
})
function next() { if (props.project) activeImg.value = (activeImg.value + 1) % props.project.images.length }
function prev() { if (props.project) activeImg.value = (activeImg.value - 1 + props.project.images.length) % props.project.images.length }
</script>

<style scoped>
.backdrop {
    position: fixed; inset: 0; z-index: 9999;
    background: rgba(0,0,0,0.65); backdrop-filter: blur(6px);
}
.drawer {
    background: var(--bg-surface);
    display: flex; flex-direction: column;
}

/* ── DESKTOP: MODAL ── */
@media (min-width: 769px) {
    .drawer {
        position: fixed;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        width: 640px;
        max-height: 90vh;
        border-radius: 16px;
        border: 1px solid var(--border);
        box-shadow: 0 24px 48px var(--accent-glow);
    }
    .drawer-enter-active, .drawer-leave-active { transition: opacity 0.3s; }
    .drawer-enter-active .drawer, .drawer-leave-active .drawer { 
        transition: transform 0.35s cubic-bezier(0.4,0,0.2,1), opacity 0.3s; 
    }
    .drawer-enter-from { opacity: 0; }
    .drawer-enter-from .drawer { transform: translate(-50%, -45%) scale(0.95); opacity: 0; }
    .drawer-leave-to { opacity: 0; }
    .drawer-leave-to .drawer { transform: translate(-50%, -45%) scale(0.95); opacity: 0; }
}

/* ── MOBILE/TABLET: DRAWER ── */
@media (max-width: 768px) {
    .drawer {
        position: fixed; top: 0; right: 0; bottom: 0;
        width: min(460px, 100vw);
        border-left: 1px solid var(--border);
        transform: translateX(0);
    }
    .drawer-enter-active, .drawer-leave-active { transition: opacity 0.3s; }
    .drawer-enter-active .drawer, .drawer-leave-active .drawer { 
        transition: transform 0.35s cubic-bezier(0.4,0,0.2,1); 
    }
    .drawer-enter-from { opacity: 0; }
    .drawer-enter-from .drawer { transform: translateX(100%); }
    .drawer-leave-to { opacity: 0; }
    .drawer-leave-to .drawer { transform: translateX(100%); }
}

.drawer__head {
    display: flex; align-items: center; gap: 0.75rem;
    padding: 1rem 1.25rem;
    border-bottom: 1px solid var(--border);
    flex-shrink: 0;
}
.btn-close {
    width: 32px; height: 32px; border-radius: 8px;
    background: var(--bg-elevated); border: 1px solid var(--border);
    color: var(--text-secondary); cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: color 0.2s, border-color 0.2s;
}
.btn-close:hover { color: var(--accent); border-color: var(--accent); }
.drawer__label { font-size: 0.8rem; font-weight: 600; color: var(--text-muted); letter-spacing: 0.08em; text-transform: uppercase; }

.drawer__body { flex: 1; overflow-y: auto; padding: 1.25rem; scrollbar-width: thin; }
.drawer__title { font-size: 1.375rem; font-weight: 800; color: var(--text-primary); margin: 0 0 1rem; }

/* Carousel */
.carousel { margin-bottom: 1.25rem; background: var(--bg-elevated); border-radius: 12px; overflow: hidden; }
.carousel__img { width: 100%; height: 260px; object-fit: contain; display: block; }
.carousel__nav { display: flex; align-items: center; justify-content: center; gap: 0.75rem; padding: 0.625rem; }
.nav-btn {
    width: 28px; height: 28px; border-radius: 50%;
    background: var(--accent-glow); border: 1px solid var(--accent);
    color: var(--accent); cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    transition: background 0.2s;
}
.nav-btn:hover { background: var(--accent); color: #fff; }
.dots { display: flex; gap: 5px; }
.dot { width: 5px; height: 5px; border-radius: 50%; border: none; background: var(--border); cursor: pointer; padding: 0; transition: background 0.2s, transform 0.2s; }
.dot--on { background: var(--accent); transform: scale(1.5); }

/* Sections */
.section { margin-bottom: 1.25rem; }
.section__title { font-size: 0.7rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em; margin: 0 0 0.5rem; }
.section__text { font-size: 0.875rem; color: var(--text-secondary); line-height: 1.75; margin: 0; }

.stacks { display: flex; flex-wrap: wrap; gap: 0.375rem; }
.stack {
    background: var(--bg-elevated); border: 1px solid var(--border);
    color: var(--text-secondary); font-size: 0.75rem; font-weight: 500;
    padding: 0.25rem 0.625rem; border-radius: 5px;
}

.links { display: flex; gap: 0.625rem; flex-wrap: wrap; }
.link-btn {
    display: inline-flex; align-items: center; gap: 0.375rem;
    padding: 0.5rem 1rem; border-radius: 8px;
    font-size: 0.8125rem; font-weight: 600; text-decoration: none;
    transition: opacity 0.2s, transform 0.2s;
}
.link-btn:hover { opacity: 0.85; transform: translateY(-1px); }
.link-btn--primary { background: var(--accent); color: #fff; }
.link-btn--ghost { background: var(--bg-elevated); border: 1px solid var(--border); color: var(--text-secondary); }
.private-note { font-size: 0.8rem; color: var(--text-muted); font-style: italic; margin: 0; }
</style>
