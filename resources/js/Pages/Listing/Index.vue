<template>
  <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-1">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show', listing.id)">
        <ListingAddress :listing="listing" />
        </Link>
      </div>
      <div>
        <Link :href="route('listing.edit', listing.id)">Edit</Link> &nbsp;
        <Link :href="route('listing.destroy', listing.id)" method="DELETE" as="button">Delete</Link>
      </div>
    </Box>
  </div>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import { Link } from "@inertiajs/vue3";
import Box from '@/Components/UI/Box.vue';

defineProps({
  listings: Array,
});
</script>
