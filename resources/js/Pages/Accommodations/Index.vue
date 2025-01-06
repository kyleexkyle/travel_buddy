<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import AccommodationForm from "@/Components/Accommodation/AccommodationForm.vue";
import ListingContainer from "@/Pages/Listing/Partials/ListingContainer.vue";

const props = defineProps({
    accommodations: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <GuestLayout title="Accommodations">
        <template v-slot:bookingNavItems >
            <AccommodationForm/>
        </template>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 flex justify-center items-center">
            <!--         HOTELS           -->
            <ListingContainer title="Featured Properties" :model="accommodations.data"/>
        </div>
    </GuestLayout>
</template>
