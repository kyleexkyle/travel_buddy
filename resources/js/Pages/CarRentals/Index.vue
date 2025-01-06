<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import CarRentalForm from "@/Components/CarRentals/CarRentalForm.vue";

</script>

<template>
    <GuestLayout title="Car Rentals">
        <template v-slot:bookingNavItems >
            <CarRentalForm/>
        </template>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 flex justify-center items-center">
            <!--         CAR RENTALS           -->
            <div class="space-y-6">
                <p class="text-2xl font-bold">Featured Car Rentals</p>
                <ul class="flex space-x-3">
                    <li>
                        <a class="bg-blue-950 p-2 text-sm text-white font-bold rounded shadow" href="#">Siquijor</a>
                    </li>
                    <li>
                        <a class="bg-white p-2 text-sm text-blue-950 rounded shadow" href="#">San Juan</a>
                    </li>
                    <li>
                        <a class="bg-white p-2 text-sm text-blue-950 rounded shadow" href="#">Lazi</a>
                    </li>
                    <li>
                        <a class="bg-white p-2 text-sm text-blue-950 rounded shadow" href="#">Maria</a>
                    </li>
                    <li>
                        <a class="bg-white p-2 text-sm text-blue-950 rounded shadow" href="#">Enrique Villanueva</a>
                    </li>
                    <li>
                        <a class="bg-white p-2 text-sm text-blue-950 rounded shadow" href="#">Larena</a>
                    </li>
                </ul>

                <div class="grid grid-cols-4 gap-4">
                    <div v-for="index in 4" :key="index" class="bg-white shadow-md rounded-lg">
                        <img class="rounded-t-lg" src="/imagess/car.jpg" alt="">
                        <div class="p-3 space-y-3">
                            <div class="flex space-x-2">
                                <span class="font-bold text-base">Car </span>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex space-x-2">
                                    <p class="bg-blue-800 text-white px-2 rounded-full">4.4<small class="text-gray-400">/5</small></p>
                                    <p class="text-blue-900 font-bold text-sm">Average</p>
                                </div>
                                <p class="ml-auto mt-2 space-x-1">
                                    <small class="text-gray-400">From</small>
                                    <span class="font-bold">PHP 0000.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
