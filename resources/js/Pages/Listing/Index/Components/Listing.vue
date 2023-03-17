<template>
    <Box>
        <div>
            <Link :href="route('listing.show', listing.id)">
            <div class="flex items-center gap-1">
                <Price :price="listing.price" class="text-2xl" />
                <div class="text-xs text-gray-500">
                    <Price :price="400" />
                </div>
            </div>
            <ListingSpace :listing="listing" class="text-lg hover:text-gray-500 dark:hover:text-gray-100" />
            <ListingAddress :listing="listing" class="text-gray-500" />
            </Link>
        </div>
        <div>
            <Link :href="route('listing.edit', listing.id)">Edit</Link> &nbsp;
            <Link :href="route('listing.destroy', listing.id)" method="DELETE" as="button">Delete</Link>
        </div>
    </Box>
</template>

<script setup>
import ListingAddress from '@/Components/UI/ListingAddress.vue';
import ListingSpace from '@/Components/UI/ListingSpace.vue';
import Price from '@/Components/UI/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { Link } from "@inertiajs/vue3";
import { useMonthlyPayment } from '@/Composables/useMonthlyPayment';

const props = defineProps({ listing: Object });
const { monthlyPayment } = useMonthlyPayment(
    props.listing.price, 2.5, 25,
);
</script>