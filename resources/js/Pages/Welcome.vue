<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref } from 'vue';
import BookingNavOptions from "@/Components/Booking/BookingNavOptions.vue";
import BookingNavItems from "@/Components/Booking/BookingNavItems.vue";
import MunicipalityFilter from "@/Pages/Listing/Partials/MunicipalityFilter.vue";
import ListingContainer from "@/Pages/Listing/Partials/ListingContainer.vue";

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    model: {
        type: Object,
        required: true,
    }
});

const activeTab = ref('stays');

const setActiveTab = (tab) => {
    activeTab.value = tab;
};

</script>

<template>

    <Head title="Welcome" />

    <GuestLayout title="Welcome">

        <template v-slot:bookingNavItems >
            <BookingNavItems/>
        </template>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!--         HOTELS           -->
            <ListingContainer title="Featured Properties" :model="model.hotels.data"/>

            <!--         CAR RENTALS           -->
            <ListingContainer title="Featured Car Rentals" :model="model.cars.data"/>

            <!--         SCOOTER RENTALS           -->
            <ListingContainer title="Featured Scooter Rentals" :model="model.scooters.data"/>
        </div>
    </GuestLayout>
</template>
