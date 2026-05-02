<template>
    <div class="project-card" @click="$emit('open', project)" role="button" tabindex="0"
        @keydown.enter="$emit('open', project)" :aria-label="`View ${project.title}`">
        <div class="card__img-wrap">
            <img :src="project.images[0]" :alt="project.title" loading="lazy" class="card__img" />
            <div class="card__shine"></div>
        </div>
        <div class="card__body">
            <h3 class="card__title">{{ project.title }}</h3>
            <div class="card__stacks">
                <span v-for="s in project.stacks.slice(0, 3)" :key="s" class="badge">{{ s }}</span>
                <span v-if="project.stacks.length > 3" class="badge badge--more">+{{ project.stacks.length - 3 }}</span>
            </div>
            <div class="card__arrow">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({ project: { type: Object, required: true } })
defineEmits(['open'])
</script>

<style scoped>
.project-card {
    background: var(--bg-surface);
    border: 1px solid var(--border);
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
}
.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 40px var(--accent-glow);
    border-color: var(--accent);
}
.project-card:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }

.card__img-wrap { position: relative; padding-top: 58%; overflow: hidden; }
.card__img {
    position: absolute; inset: 0; width: 100%; height: 100%;
    object-fit: cover; transition: transform 0.4s;
}
.project-card:hover .card__img { transform: scale(1.06); }
.card__shine {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.06) 0%, transparent 60%);
    pointer-events: none;
}

.card__body { padding: 1rem 1.125rem 1.125rem; position: relative; }
.card__title { font-size: 0.9375rem; font-weight: 700; color: var(--text-primary); margin: 0 0 0.5rem; }
.card__stacks { display: flex; flex-wrap: wrap; gap: 0.375rem; margin-bottom: 0.75rem; }

.badge {
    background: var(--bg-elevated);
    border: 1px solid var(--border);
    color: var(--text-secondary);
    font-size: 0.6875rem; font-weight: 500;
    padding: 0.175rem 0.5rem; border-radius: 4px;
}
.badge--more { color: var(--accent); border-color: var(--accent); background: var(--accent-glow); }

.card__arrow {
    color: var(--accent); opacity: 0;
    transform: translateX(-6px);
    transition: opacity 0.2s, transform 0.2s;
}
.project-card:hover .card__arrow { opacity: 1; transform: translateX(0); }
</style>
