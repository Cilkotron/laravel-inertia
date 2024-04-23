<template>
    <div class="flex justify-center space-x-2 mt-6">
        <template v-for="link in links" :key="link.label">
            <Component
                :is="link.url ? 'Link' : 'span'"
                :href="link.url"
                v-html="link.label"
                class="px-1 border-2"
                :class="{
                    'text-gray-500': !link.url,
                    'bg-blue-500 text-white': link.active,
                }"
            ></Component>
        </template>
    </div>
</template>

<script>
    export default{
        props: {
            links: Array
        }
    }
</script>
