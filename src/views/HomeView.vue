<template>
    <TheNavbar />
    <main>

        <!-- ===== HERO — split diagonal bento ===== -->
        <section class="hero" id="home">
            <div class="hero__bg" aria-hidden="true">
                <div class="hero__orb hero__orb--1"></div>
                <div class="hero__orb hero__orb--2"></div>
                <div class="hero__grid-lines"></div>
            </div>

            <div class="container hero__layout">
                <!-- Left: text -->
                <div class="hero__text">
                    <div class="avail-badge">
                        <span class="avail-dot"></span> Open to opportunities
                    </div>
                    <h1>
                        <span class="line-muted">Hi, I'm</span>
                        <span class="line-name">Yoga Agung</span>
                        <span class="line-accent">Prasetio<span class="cursor-blink">_</span></span>
                    </h1>
                    <div class="role-row">
                        <span class="role-tag">Full Stack Dev</span>
                        <span class="role-sep">·</span>
                        <span class="role-tag">Mobile Dev</span>
                        <span class="role-sep">·</span>
                        <span class="role-tag">API Architect</span>
                    </div>
                    <p class="hero__desc">
                        {{ experienceYears }}+ years shipping production-ready apps across logistics,
                        e-commerce, ERP & finance. PHP · Laravel · Vue.js · Flutter.
                    </p>
                    <div class="hero__cta-row">
                        <a :href="socialLinks.whatsapp" target="_blank" rel="noopener noreferrer" class="cta-main">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326z"/></svg>
                            Let's Talk
                        </a>
                        <a :href="socialLinks.cv" target="_blank" rel="noopener noreferrer" class="cta-ghost" aria-label="Download CV">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 16l4-4h-3V4h-2v8H8l4 4z" fill="currentColor"/><path d="M20 18H4v2h16v-2z" fill="currentColor"/></svg>
                            Download CV
                        </a>
                    </div>
                    <div class="hero__social-row">
                        <a :href="socialLinks.github" target="_blank" rel="noopener noreferrer" class="icon-link" aria-label="GitHub">
                            <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
                        </a>
                        <a :href="socialLinks.linkedin" target="_blank" rel="noopener noreferrer" class="icon-link" aria-label="LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
                        </a>
                        <a :href="`mailto:${socialLinks.email}`" class="icon-link" aria-label="Email">
                            <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Right: bento grid -->
                <div class="hero__bento" aria-hidden="true">
                    <div class="bento-photo">
                        <img src="/img/hero-illustration.svg" alt="Building a website illustration" width="340" height="340" loading="eager" class="svg-img" />
                    </div>
                    <div class="bento-stat">
                        <p class="bento-stat__num">{{ workProjects.length }}+</p>
                        <p class="bento-stat__lbl">Projects Delivered</p>
                    </div>
                    <div class="bento-stat bento-stat--alt">
                        <p class="bento-stat__num">{{ experienceYears }}+</p>
                        <p class="bento-stat__lbl">Years Experience</p>
                    </div>
                    <div class="bento-stack">
                        <p class="bento-stack__lbl">Top Skills</p>
                        <div class="bento-stack__chips">
                            <span v-for="s in topSkills.slice(0, 8)" :key="s">{{ s }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WORK PROJECTS ===== -->
        <section class="projects" id="projects">
            <div class="container">
                <div class="section-hd">
                    <span class="eyebrow">Portfolio</span>
                    <h2 class="heading">Work Projects</h2>
                </div>
                <div class="project-grid">
                    <div
                        v-for="p in workProjects"
                        :key="p.id"
                        class="project-card"
                        @click="openProject(p)"
                        tabindex="0"
                        @keydown.enter="openProject(p)"
                        :aria-label="`Open ${p.title}`"
                    >
                        <div class="project-card__img">
                            <img :src="p.images[0]" :alt="p.title" loading="lazy" />
                        </div>
                        <div class="project-card__body">
                            <h3>{{ p.title }}</h3>
                            <p>{{ p.about.slice(0, 100) }}…</p>
                            <div class="project-card__stacks">
                                <span v-for="s in p.stacks.slice(0,3)" :key="s">{{ s }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== PERSONAL ===== -->
        <section class="personal" id="personal-projects">
            <div class="container">
                <div class="section-hd">
                    <span class="eyebrow">Open Source & Personal</span>
                    <h2 class="heading">Personal Projects</h2>
                </div>
                <div class="project-grid">
                    <div
                        v-for="p in personalProjects"
                        :key="p.id"
                        class="project-card"
                        @click="openProject(p)"
                        tabindex="0"
                        @keydown.enter="openProject(p)"
                        :aria-label="`Open ${p.title}`"
                    >
                        <div class="project-card__img">
                            <img :src="p.images[0]" :alt="p.title" loading="lazy" />
                        </div>
                        <div class="project-card__body">
                            <h3>{{ p.title }}</h3>
                            <p>{{ p.about.slice(0, 100) }}…</p>
                            <div class="project-card__stacks">
                                <span v-for="s in p.stacks.slice(0,3)" :key="s">{{ s }}</span>
                            </div>
                            <div class="project-card__links">
                                <a v-if="p.github" :href="p.github" target="_blank" rel="noopener noreferrer" @click.stop aria-label="GitHub">GitHub →</a>
                                <a v-if="p.website" :href="p.website" target="_blank" rel="noopener noreferrer" @click.stop aria-label="Live site">Live →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer__inner">
            <p class="footer__copy">&copy; {{ year }} <strong>Yoga Agung Prasetio</strong></p>
            <div class="footer__links">
                <a :href="socialLinks.github" target="_blank" rel="noopener noreferrer" class="footer__link">GitHub</a>
                <a :href="socialLinks.linkedin" target="_blank" rel="noopener noreferrer" class="footer__link">LinkedIn</a>
                <a :href="`mailto:${socialLinks.email}`" class="footer__link">Email</a>
            </div>
        </div>
    </footer>

    <ProjectDrawer :project="selectedProject" @close="selectedProject = null" />
</template>

<script setup>
import { ref } from 'vue'
import TheNavbar from '@/components/TheNavbar.vue'
import ProjectCard from '@/components/ProjectCard.vue'
import ProjectDrawer from '@/components/ProjectDrawer.vue'
import { workProjects, personalProjects, experienceYears, socialLinks, topSkills } from '@/data/projects.js'

const selectedProject = ref(null)
const year = new Date().getFullYear()
function openProject(p) { selectedProject.value = p }
</script>

<style scoped>
/* ── Shared ── */
.container { max-width: 1160px; margin: 0 auto; padding: 0 1.5rem; position: relative; z-index: 1; }
.eyebrow { display: inline-block; font-size: 0.68rem; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 0.5rem; }
.heading { font-size: clamp(1.75rem, 3.5vw, 2.5rem); font-weight: 800; color: var(--text-primary); line-height: 1.15; margin: 0 0 0.875rem; }
.hl { color: var(--accent); }
.body-text { color: var(--text-secondary); line-height: 1.8; margin: 0 0 1rem; font-size: 0.9375rem; }
.sub { color: var(--text-secondary); font-size: 0.9375rem; max-width: 480px; margin: 0 auto; line-height: 1.65; }

/* ── HERO ── */
.hero {
    min-height: 100vh; display: flex; align-items: center;
    position: relative; overflow: hidden; padding: 100px 0 60px;
}
.hero__bg { position: absolute; inset: 0; pointer-events: none; }
.hero__orb {
    position: absolute; border-radius: 50%;
    filter: blur(80px); opacity: 0.35;
}
.hero__orb--1 { width: 480px; height: 480px; background: var(--accent); top: -100px; right: 5%; }
.hero__orb--2 { width: 300px; height: 300px; background: var(--accent-2); bottom: -60px; left: 10%; }
.hero__grid-lines {
    position: absolute; inset: 0;
    background-image: linear-gradient(var(--border) 1px, transparent 1px), linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 48px 48px;
    mask-image: radial-gradient(ellipse 70% 80% at 60% 40%, black, transparent);
}

.hero__layout {
    display: grid;
    grid-template-columns: 1fr 460px;
    align-items: center;
    gap: 3rem;
    width: 100%;
}

/* Left text */
.avail-badge {
    display: inline-flex; align-items: center; gap: 0.5rem;
    background: color-mix(in srgb, var(--accent) 10%, var(--bg-surface));
    border: 1px solid color-mix(in srgb, var(--accent) 30%, transparent);
    color: var(--accent); font-size: 0.78rem; font-weight: 600;
    padding: 0.3rem 0.875rem; border-radius: 50px; margin-bottom: 1.375rem;
}
.avail-dot {
    width: 7px; height: 7px; border-radius: 50%; background: var(--accent);
    animation: pulse 2s ease-in-out infinite;
}
@keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(0.8)} }

h1 { display: flex; flex-direction: column; margin: 0 0 1rem; line-height: 1.05; }
.line-muted { font-size: clamp(1rem, 2vw, 1.25rem); color: var(--text-muted); font-weight: 500; }
.line-name { font-size: clamp(2.25rem, 5vw, 3.5rem); font-weight: 900; color: var(--text-primary); }
.line-accent { font-size: clamp(2.25rem, 5vw, 3.5rem); font-weight: 900; background: linear-gradient(120deg, var(--accent) 0%, var(--accent-2) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.cursor-blink { animation: blink 1.1s step-end infinite; }
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0} }

.role-row { display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1.25rem; }
.role-tag { background: var(--bg-elevated); border: 1px solid var(--border); color: var(--text-secondary); font-size: 0.8rem; font-weight: 600; padding: 0.3rem 0.75rem; border-radius: 6px; }
.role-sep { color: var(--text-muted); font-size: 0.75rem; }

.hero__desc { color: var(--text-secondary); font-size: 0.9375rem; line-height: 1.75; max-width: 440px; margin: 0 0 1.75rem; }

.hero__cta-row { display: flex; gap: 0.875rem; flex-wrap: wrap; margin-bottom: 1.5rem; }
.cta-main {
    display: inline-flex; align-items: center; gap: 0.5rem;
    padding: 0.7rem 1.5rem; border-radius: 10px;
    background: var(--accent); color: #fff;
    font-weight: 700; font-size: 0.9rem; text-decoration: none;
    box-shadow: 0 4px 20px var(--accent-glow);
    transition: transform 0.2s, box-shadow 0.2s;
}
.cta-main:hover { transform: translateY(-2px); box-shadow: 0 8px 30px var(--accent-glow); }
.cta-ghost {
    display: inline-flex; align-items: center; gap: 0.5rem;
    padding: 0.7rem 1.5rem; border-radius: 10px;
    border: 1.5px solid var(--border); color: var(--text-secondary);
    font-weight: 600; font-size: 0.9rem; text-decoration: none;
    transition: border-color 0.2s, color 0.2s, transform 0.2s;
    background: transparent;
}
.cta-ghost:hover { border-color: var(--accent); color: var(--accent); transform: translateY(-2px); }

.hero__social-row { display: flex; gap: 0.5rem; }
.icon-link {
    width: 38px; height: 38px; border-radius: 9px;
    background: var(--bg-surface); border: 1px solid var(--border);
    color: var(--text-secondary); display: flex; align-items: center; justify-content: center;
    text-decoration: none; transition: border-color 0.2s, color 0.2s, transform 0.2s;
}
.icon-link:hover { border-color: var(--accent); color: var(--accent); transform: translateY(-2px); }

/* Bento grid */
.hero__bento {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto auto;
    gap: 0.875rem;
}

.bento-photo {
    grid-column: 1 / -1;
    background: var(--bg-surface);
    border: 1px solid var(--border);
    border-radius: 20px;
    overflow: hidden;
    padding: 1rem;
    display: flex; align-items: center; justify-content: center;
}
.bento-photo img { width: 100%; max-height: 220px; object-fit: contain; }

.bento-stat {
    background: var(--bg-surface);
    border: 1px solid var(--border);
    border-radius: 16px; padding: 1.25rem 1rem;
    text-align: center;
}
.bento-stat--alt {
    background: linear-gradient(135deg, color-mix(in srgb, var(--accent) 15%, var(--bg-surface)), var(--bg-surface));
    border-color: color-mix(in srgb, var(--accent) 25%, transparent);
}
.bento-stat__num { font-size: 1.75rem; font-weight: 900; color: var(--accent); line-height: 1; margin: 0 0 0.25rem; }
.bento-stat__lbl { font-size: 0.75rem; color: var(--text-muted); font-weight: 500; margin: 0; }

.bento-stack {
    grid-column: 1 / -1;
    background: var(--bg-elevated);
    border: 1px solid var(--border);
    border-radius: 14px; padding: 1rem 1.125rem;
}
.bento-stack__lbl { font-size: 0.7rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.625rem; }
.bento-stack__chips { display: flex; flex-wrap: wrap; gap: 0.375rem; }
.bento-stack__chips span {
    background: var(--bg-surface); border: 1px solid var(--border);
    color: var(--accent); font-size: 0.72rem; font-weight: 600;
    padding: 0.25rem 0.625rem; border-radius: 5px;
}

/* ── SVG images ── */
.svg-img { filter: drop-shadow(0 8px 32px var(--accent-glow)); }

/* ── PROJECTS & PERSONAL ── */
.projects { padding: 5rem 0 2rem; }
.section-hd { text-align: center; margin-bottom: 2.5rem; }

.project-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.25rem; }

.project-card {
    background: var(--bg-elevated); border: 1px solid var(--border);
    border-radius: 16px; overflow: hidden; cursor: pointer;
    transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
    display: flex; flex-direction: column;
}
.project-card:hover { transform: translateY(-5px); box-shadow: 0 12px 36px var(--accent-glow); border-color: var(--accent); }
.project-card:focus-visible { outline: 2px solid var(--accent); }

.project-card__img { aspect-ratio: 16/9; overflow: hidden; background: var(--bg-surface); }
.project-card__img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
.project-card:hover .project-card__img img { transform: scale(1.05); }

.project-card__body { padding: 1rem 1.125rem 1.125rem; flex: 1; display: flex; flex-direction: column; }
.project-card__body h3 { font-size: 0.9375rem; font-weight: 700; color: var(--text-primary); margin: 0 0 0.375rem; }
.project-card__body p { font-size: 0.8125rem; color: var(--text-secondary); line-height: 1.6; margin: 0 0 0.75rem; flex: 1; }

.project-card__stacks { display: flex; flex-wrap: wrap; gap: 0.3rem; margin-bottom: 0.875rem; }
.project-card__stacks span { font-size: 0.68rem; font-weight: 600; color: var(--accent); background: var(--accent-glow); border: 1px solid color-mix(in srgb, var(--accent) 25%, transparent); padding: 0.15rem 0.5rem; border-radius: 4px; }

.project-card__links { display: flex; gap: 0.75rem; margin-top: auto; }
.project-card__links a { font-size: 0.8125rem; font-weight: 700; color: var(--accent); text-decoration: none; transition: opacity 0.2s; }
.project-card__links a:hover { opacity: 0.75; }

/* ── FOOTER ── */
.footer { padding: 2rem 0; border-top: 1px solid var(--border); }
.footer__inner { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; }
.footer__copy { font-size: 0.875rem; color: var(--text-muted); margin: 0; }
.footer__copy strong { color: var(--text-secondary); }
.footer__links { display: flex; gap: 1.25rem; }
.footer__link { font-size: 0.875rem; color: var(--text-muted); text-decoration: none; transition: color 0.2s; }
.footer__link:hover { color: var(--accent); }

/* ── Responsive ── */
@media (max-width: 1024px) {
    .hero__layout { grid-template-columns: 1fr; }
    .hero__bento { grid-template-columns: repeat(4, 1fr); }
    .bento-photo { grid-column: 1 / 3; }
    .bento-stack { grid-column: 3 / -1; grid-row: 1; }
    .project-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 768px) {
    .hero { padding: 90px 0 50px; }
    .hero__layout { gap: 2rem; }
    .hero__bento { grid-template-columns: 1fr 1fr; }
    .bento-photo { grid-column: 1 / -1; }
    .bento-stack { grid-column: 1 / -1; }
    h1 .line-name, h1 .line-accent { font-size: 2.25rem; }
    .hero__desc { max-width: 100%; }
    .project-grid { grid-template-columns: repeat(2, 1fr); }
    .footer__inner { justify-content: center; text-align: center; }
}
@media (max-width: 480px) {
    .project-grid { grid-template-columns: 1fr; }
}
</style>
