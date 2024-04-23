<template>
    <section>
        <header class="flex bg-gray-200 p-6 justify-between">
            <h1 class="flex font-bold">Laravel + Inertia</h1>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <iframe
                src="https://www.youtube.com/embed/AJlpR1ejF6A?si=2A_mwKvM92Kbos50"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
            ></iframe>
            <h1 class="text-3xl">
                <slot />
            </h1>
        </div>
    </section>
</template>

<script>
import Nav from "./Nav.vue";

export default {
    components: { Nav },
};
</script>
