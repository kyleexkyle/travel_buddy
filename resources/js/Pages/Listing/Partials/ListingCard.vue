<script setup>
const props = defineProps({
    entity: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <div  class="bg-white shadow-md rounded-lg">
        <!-- @TODO change to dynamic file using spatie media query when needed -->
        <img v-if="entity.category === 1" class="rounded-t-lg" src="/imagess/hotel.jpeg" alt="">
        <img v-if="entity.category === 2" class="rounded-t-lg" src="/imagess/car.jpg" alt="">
        <img v-if="entity.category === 3" class="rounded-t-lg" src="/imagess/scooty.jpeg" alt="">

        <div class="p-3 space-y-3">
            <div class="flex justify-between">
                <span class="font-bold text-base w-36 truncate">{{ entity.name }}</span>
                <div class="flex">
                    <svg v-for="star in entity.business" :key="entity.id+star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500 w-5 h-5">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex space-x-2">
                    <p class="bg-blue-800 text-white px-2 rounded-full">{{entity.business}}<small class="text-gray-400">/5</small></p>
                    <p class="text-blue-900 font-bold text-sm">100 reviews</p>
                </div>
            </div>
            <div class="flex justify-between mt-10">
                <p class="space-x-1 my-auto">
                    <small class="text-gray-400">From</small>
                    <span class="font-bold">{{ entity.price }}</span>
                </p>
                <button class="rounded-md bg-blue-500 px-3 py-1 text-white font-medium">Reserve</button>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
