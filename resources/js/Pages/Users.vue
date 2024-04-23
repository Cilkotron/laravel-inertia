<template>
    <Head>
        <title>Users</title>
        <meta
            head-key="description"
            name="description"
            content="Users page description"
        />
    </Head>

    <h1 class="text-3xl">Users</h1>

    <ul role="list" class="divide-y divide-gray-100">
        <li
            class="flex justify-between gap-x-6 py-5"
            v-for="user in users.data"
            :key="user.id"
        >
            <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">
                        {{ user.name }}
                    </p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">{{ user.email }}</p>
            </div>
        </li>
    </ul>

    <Pagination :links="users.links"></Pagination>
</template>

<script setup>
import Pagination from '../Shared/Pagination.vue';
defineProps({ users: Object });
</script>
