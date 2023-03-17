<template>
  <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-1">
    <Listing v-for="listing in listings" :key="listing.id" :listing="listing" />
  </div>
</template>

<script setup>
import Listing from '@/Pages/Listing/Index/Components/Listing.vue';
defineProps({
  listings: Array,
});
</script>
