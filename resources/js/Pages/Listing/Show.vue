<template>
  <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
    <Box class="md:col-span-7 flex items-center w-full">
      <div class="w-full text-center font-medium text-gray-500">
        No images
      </div>
    </Box>
    <div class="md:col-span-5 flex flex-col gap-4">
      <Box>
        <template #header>
          Basic info
        </template>
        <Price :price="listing.price" class="text-2xl" />
        <ListingSpace :listing="listing" class="text-lg hover:text-gray-500 dark:hover:text-gray-100" />
        <ListingAddress :listing="listing" class="text-gray-500" />
      </Box>
      <Box>
        <template #header>
          Offer
        </template>
        Make an offer!
      </Box>
    </div>
    <div class="text-lg font-medium rounded-md p-2">
      <Link :href="route('listing.index')">Back</Link>
    </div>
  </div>
</template>

<script setup>
import ListingAddress from '@/Components/UI/ListingAddress.vue';
import ListingSpace from '@/Components/UI/ListingSpace.vue';
import Price from '@/Components/UI/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { Link } from "@inertiajs/vue3";

defineProps({
  listing: Object,
});
</script>
