<script setup>
import { useBookingNavStore } from "@/Stores/BookingNavStore.js";
import Accommodation from "@/Components/Booking/Accommodation.vue";
const bookingNavStore = useBookingNavStore();

</script>

<template>
    <div class="bg-blue-800">
        <Accommodation />

<!--        <div v-if="bookingNavStore.ActiveTab === 'car'">Car</div>-->
<!--        <div v-if="bookingNavStore.ActiveTab === 'motorbike'">Motorbikes</div>-->
    </div>
</template>

<style scoped>

</style>
