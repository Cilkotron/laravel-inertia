<template>
    <section>
        <header class="flex bg-gray-200 p-6 justify-between">
            <h1 class="flex font-bold">Laravel + Inertia</h1>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl">
                <slot />
            </h1>
        </div>
    </section>
</template>


<script>
import Nav from './Nav.vue';

export default {
    components: { Nav}
}
</script>