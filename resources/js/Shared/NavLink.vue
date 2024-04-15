<template>
    <Link :href="href" class="text-blue-500 hover:underline">
        <slot></slot
    ></Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: { Link },
    props: {
        href: String
    },
};
</script>
