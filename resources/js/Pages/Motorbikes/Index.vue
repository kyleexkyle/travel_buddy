<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import MotorBikeForm from "@/Components/MotorBikes/MotorBikeForm.vue";
import ListingContainer from "@/Pages/Listing/Partials/ListingContainer.vue";

const props = defineProps({
    scooters: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <GuestLayout title="Motorbikes">
        <template v-slot:bookingNavItems >
            <MotorBikeForm/>
        </template>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 flex justify-center items-center">
            <!--         SCOOTER RENTALS           -->
            <ListingContainer title="Featured Scooter Rentals" :model="scooters.data"/>
        </div>
    </GuestLayout>
</template>
