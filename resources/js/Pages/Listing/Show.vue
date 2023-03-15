<template>
  <div>
    <ListingAddress :listing="listing" />
  </div>
</template>

<script setup>
import ListingAddress from '@/Components/UI/ListingAddress.vue';
defineProps({
  listing: Object,
});
</script>
