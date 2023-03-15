<template>
  <span>
    {{ listing.street }} {{ listing.street_no }} {{ listing.city }}
  </span>
</template>

<script setup>
defineProps({
  listing: Object,
});
</script>
