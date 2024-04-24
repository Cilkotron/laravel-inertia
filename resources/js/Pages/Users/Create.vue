<template>
    <Head>
        <title>Create User</title>
    </Head>
    <h1 class="text-3xl">Create New User</h1>
    <form @submit.prevent="submit" class="max-w-xl mx-auto">
        <div class="space-y-6 mt-6">
            <div class="sm:col-span-4">
                <label
                    for="name"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Name</label
                >
                <div class="mt-2">
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
                    >
                        <input
                            type="text"
                            v-model="form.name"
                            id="name"
                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            placeholder="Jane Smith"
                        />
                    </div>
                    <div class="text-red-500 text-xs font-semibold mt-1">
                        <p v-if="form.errors.name" v-text="form.errors.name"></p>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-4">
                <label
                    for="email"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Email</label
                >
                <div class="mt-2">
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
                    >
                        <input
                            type="email"
                            v-model="form.email"
                            id="email"
                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            placeholder="janesmith@gmail.com"
                        />
                    </div>
                    <div class="text-red-500 text-xs font-semibold mt-1">
                        <p v-if="form.errors.email" v-text="form.errors.email"></p>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-4">
                <label
                    for="password"
                    class="block text-sm font-medium leading-6 text-gray-900"
                    >Password</label
                >
                <div class="mt-2">
                    <div
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
                    >
                        <input
                            type="password"
                            v-model="form.password"
                            id="password"
                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                        />
                    </div>
                </div>
                <div class="text-red-500 text-xs font-semibold mt-1">
                    <p v-if="form.errors.password" v-text="form.errors.password"></p>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none"
                :disabled="form.processing"
            >
                Save
            </button>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";


let form = useForm({
    name: "",
    email: "",
    password: "",
});

let submit = () => {
    form.post("/users");
};
</script>
