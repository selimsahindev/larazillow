<template>
  <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-1">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show', listing.id)">
        <Price :price="listing.price" class="text-2xl" />
        <ListingSpace :listing="listing" class="text-lg hover:text-gray-500 dark:hover:text-gray-100" />
        <ListingAddress :listing="listing" class="text-gray-500" />
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
import ListingAddress from '@/Components/UI/ListingAddress.vue';
import ListingSpace from '@/Components/UI/ListingSpace.vue';
import Price from '@/Components/UI/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { Link } from "@inertiajs/vue3";

defineProps({
  listings: Array,
});
</script>
