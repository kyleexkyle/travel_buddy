<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CarRentalForm from "@/Components/CarRentals/CarRentalForm.vue";
import ListingContainer from "@/Pages/Listing/Partials/ListingContainer.vue";

const props = defineProps({
    cars: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <GuestLayout title="Car Rentals">
        <template v-slot:bookingNavItems >
            <CarRentalForm/>
        </template>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 flex justify-center items-center">
            <!--         CAR RENTALS           -->
            <ListingContainer title="Featured Car Rentals" :model="cars.data"/>
        </div>
    </GuestLayout>
</template>
