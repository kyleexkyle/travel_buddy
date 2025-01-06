<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import AccommodationForm from "@/Components/Accommodation/AccommodationForm.vue";

</script>

<template>
    <GuestLayout title="Accommodations">
        <template v-slot:bookingNavItems >
            <AccommodationForm/>
        </template>

        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 flex justify-center items-center">
            <!--         HOTELS           -->
            <div class=" space-y-6">
                <p class="text-2xl font-bold">Featured Properties</p>
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
                        <img class="rounded-t-lg" src="/imagess/hotel.jpeg" alt="">
                        <div class="p-3 space-y-3">
                            <div class="flex space-x-2">
                                <span class="font-bold text-base">Hotel </span>
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
                            <div class="flex flex-col">
                                <div class="flex space-x-2">
                                    <p class="bg-blue-800 text-white px-2 rounded-full">4.4<small class="text-gray-400">/5</small></p>
                                    <p class="text-blue-900 font-bold text-sm">100 reviews</p>
                                </div>
                                <p class="ml-auto mt-10 space-x-1">
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
