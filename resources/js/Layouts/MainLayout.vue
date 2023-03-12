<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>&nbsp;
    <Link href="/listing/create">Create Listing</Link>&nbsp;

    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>

    <slot>Default</slot>
</template>

<script setup>
import { computed } from 'vue';
import { Link, usePage } from "@inertiajs/vue3";

const flashSuccess = computed(() => usePage().props.flash.success);
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
