<template>
    <span>{{ formattedPrice }}</span>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    price: [Number, String],
});

// Cast the props.price to make sure it is a Number.
const formattedPrice = computed(() => Number(props.price).toLocaleString(
    'de-DE',
    {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 2,
    }
));
</script>