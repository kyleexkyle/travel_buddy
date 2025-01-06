<script setup>
import MunicipalityFilter from "@/Pages/Listing/Partials/MunicipalityFilter.vue";
import ListingCard from "@/Pages/Listing/Partials/ListingCard.vue";

const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    model: {
        type: Object,
        required: true,
    }
});
</script>

<template>
    <div class="mt-20 space-y-6">
        <p class="text-2xl font-bold">{{ title }}</p>
        <MunicipalityFilter/>

        <div class="grid grid-cols-4 gap-4">
            <template v-for="entity in model" :key="entity.id">
                <ListingCard :entity="entity"/>
            </template>

        </div>
    </div>
</template>

<style scoped>

</style>
