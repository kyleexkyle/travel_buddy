<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Checkbox from "@/Components/Checkbox.vue";
import CarRentalForm from "@/Components/CarRentals/CarRentalForm.vue";

const props = defineProps({
    cars: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <GuestLayout title="Accommodations">
        <template v-slot:bookingNavItems >
            <CarRentalForm/>
        </template>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 justify-center items-center">
            <div class="grid grid-cols-4 gap-5">
                <div>
                    <div class="rounded-lg divide-y bg-white">
                        <div class="p-3">
                            <p class="font-bold mb-3">Popular filters</p>
                            <div class="space-x-2">
                                <checkbox id="beachfront"/>
                                <label for="beachfront">Manual</label>
                            </div>

                            <div class="space-x-2">
                                <checkbox id="one_double_bed"/>
                                <label for="one_double_bed">Automatic</label>
                            </div>

                            <div class="space-x-2">
                                <checkbox id="No prepayment"/>
                                <label for="No prepayment">SUV</label>
                            </div>

                            <div class="space-x-2">
                                <checkbox id="No prepayment"/>
                                <label for="No prepayment">Pick-Up</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 space-y-3">
                    <div v-for="car in cars.data" :key="car.id" class="hover:shadow-lg p-3 rounded-lg grid grid-cols-4 gap-5 bg-white">
                        <img class="rounded-lg h-full" src="/imagess/car.jpg" alt="">
                        <div class="col-span-3">
                            <div class="p-3 space-y-3">
                                <div class="flex space-x-2">
                                    <span class="font-bold text-base">{{ car.name }}</span>
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-5 h-5">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-5 h-5">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-5 h-5">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-5 h-5">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-5 h-5">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="flex space-x-2">
                                    <span class="text-sm">{{ car.description }}</span>
                                </div>

                                <div class="flex flex-col">
                                    <div class="flex space-x-2">
                                        <p class="bg-blue-800 text-white px-2 rounded-full">4.4<small class="text-gray-400">/5</small></p>
                                        <p class="text-blue-900 font-bold text-sm">100 reviews</p>
                                    </div>
                                </div>

                                <div class="flex justify-between bg-gray-50 p-2">
                                    <div class="text-sm">
                                        <!--                                        <p class="font-bold">Room Type: 2 Single beds</p>-->
                                    </div>

                                    <div>
                                        <p class="ml-auto flex flex-col items-end">
                                            <span class="font-bold text-2xl">{{ car.price }}</span>
                                            <span class="text-sm text-gray-400">After tax {{ car.price }}</span>
                                        </p>

                                        <button class="rounded-md w-full bg-blue-500 px-3 py-2 text-white font-medium">Check Availability</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

