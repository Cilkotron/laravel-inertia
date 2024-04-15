<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <NavLink href="/">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users">Users</NavLink>
            </li>
            <li>
                <NavLink href="/settings">Settings</NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post" as="button">Logout</NavLink>
            </li>
        </ul>
    </nav>
</template>

<script>
import NavLink from './NavLink.vue';

export default {
    components: { NavLink },
};
</script>
