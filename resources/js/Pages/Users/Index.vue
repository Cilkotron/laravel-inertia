<template>
    <Head>
        <title>Users</title>
        <meta
            head-key="description"
            name="description"
            content="Users page description"
        />
    </Head>

    <div class="flex justify-between py-6">
         <div class="flex items-center">
            <h1 class="text-3xl">Users</h1>
            <Link href="/users/create" class="text-blue-500 text-sm mt-2 font-semibold ml-3 py-2 px-3 rounded rounded-xl hover:underline hover:bg-gray-200" >New User</Link>
         </div>

        <input type="search" v-model="search" placeholder="Search..."  class="border px-2 rounded-lg">
    </div>

    <ul role="list" class="divide-y divide-gray-100">
        <li
        v-if="users.data.length > 0"
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

    <Pagination :links="users?.links"></Pagination>
</template>

<script setup>
import Pagination from '../../Shared/Pagination.vue';
import { ref, watch } from 'vue'; 
import { router } from '@inertiajs/vue3';
import debounce from 'lodash/debounce'; 

let props = defineProps({
    users: Object,
    filters: Object
});

let search = ref(props.filters.search || '');

watch(search, debounce(function(value) {
    router.get('/users', { search: value }, {
        preserveState: true,
        replace: true
    });
}, 500));

</script>