<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import AccommodationForm from "@/Components/Accommodation/AccommodationForm.vue";
import Checkbox from "@/Components/Checkbox.vue";
import {Link} from "@inertiajs/vue3";

</script>

<template>
    <GuestLayout title="Accommodations">
        <template v-slot:bookingNavItems >
            <AccommodationForm/>
        </template>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 justify-center items-center">
            <div class="grid grid-cols-4 gap-5">
                <div>
                    <div class="rounded-lg divide-y bg-white">
                        <div class="p-3">
                            <p class="font-bold mb-3">Popular filters</p>
                            <div class="space-x-2">
                                <checkbox id="break_fast"/>
                                <label for="break_fast">Breakfast Included</label>
                            </div>

                            <div class="space-x-2">
                                <checkbox id="beachfront"/>
                                <label for="beachfront">Beachfront</label>
                            </div>

                            <div class="space-x-2">
                                <checkbox id="one_double_bed"/>
                                <label for="one_double_bed">One Double Bed</label>
                            </div>

                            <div class="space-x-2">
                                <checkbox id="No prepayment"/>
                                <label for="No prepayment">No Prepayment</label>
                            </div>
                        </div>
                        <div class="p-3">
                            <p class="font-bold mb-3">Property Type</p>
                            <div class="space-x-2">
                                <checkbox id="hotel"/>
                                <label for="hotel">Hotel</label>
                            </div>
                            <div class="space-x-2">
                                <checkbox id="homestay"/>
                                <label for="homestay">Homestay</label>
                            </div>
                            <div class="space-x-2">
                                <checkbox id="resorts"/>
                                <label for="resorts">Resorts</label>
                            </div>
                        </div>
                        <div class="p-3">
                            <p class="font-bold mb-3">Bed Type</p>
                            <div class="space-x-2">
                                <checkbox id="1_double_bed"/>
                                <label for="1_double_bed">1 Double bed</label>
                            </div>
                            <div class="space-x-2">
                                <checkbox id="2_beds"/>
                                <label for="2_beds">2 Beds</label>
                            </div>
                            <div class="space-x-2">
                                <checkbox id="1_single_bed"/>
                                <label for="1_single_bed">1 Single Bed</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 space-y-3">
                    <div v-for="list in 10" :key="list" class="hover:shadow-lg p-3 rounded-lg grid grid-cols-4 gap-5 bg-white">
                        <img class="rounded-lg h-full" src="/imagess/hotel.jpeg" alt="">
                        <div class="col-span-3">
                            <div class="p-3 space-y-3">
                                <div class="flex space-x-2">
                                    <span class="font-bold text-base">Super Nice Hotel Name</span>
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
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 w-5 h-5">
                                            <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <span class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, quis.</span>
                                </div>

                                <div class="flex flex-col">
                                    <div class="flex space-x-2">
                                        <p class="bg-blue-800 text-white px-2 rounded-full">4.4<small class="text-gray-400">/5</small></p>
                                        <p class="text-blue-900 font-bold text-sm">100 reviews</p>
                                    </div>
                                </div>

                                <div class="flex justify-between bg-gray-50 p-2">
                                    <div class="text-sm">
                                       <p class="font-bold">Room Type: 2 Single beds</p>
                                    </div>

                                    <div>
                                        <p class="ml-auto flex flex-col items-end">
                                            <span class="font-bold text-2xl">PHP 0,000</span>
                                            <span class="text-sm text-gray-400">After tx PHP 0,000</span>
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
