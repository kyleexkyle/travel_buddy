<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="bg-blue-800">
        <div class="flex items-center justify-center relative py-12">
            <div class="bg-white p-4 shadow-lg shadow-blue-300 rounded-md -bottom-6 absolute space-x-2 flex">

                <div class="flex flex-col">
                    <label for="accommodation">Accommodation</label>
                    <input id="accommodation" class="rounded-md border border-gray-200 shadow py-3" type="text" placeholder="Hotel/Inn">
                </div>

                <div class="flex flex-col">
                    <label for="check_in">Check-in Date</label>
                    <input id="check_in" class="rounded-md border border-gray-200 shadow py-3" type="date" placeholder="Check-in Date">
                </div>

                <div class="flex flex-col">
                    <label for="check_out">Check-out Date</label>
                    <input id="check_out" class="rounded-md border border-gray-200 shadow py-3" type="date" placeholder="Check-out Date">
                </div>

                <div class="flex flex-col">
                    <label for="options">Options</label>
                    <input id="options" class="rounded-md border border-gray-200 shadow py-3" type="text" placeholder="Adults - Children - rooms">
                </div>

                <div class="flex items-end">
                    <Link :href="route('accommodations.list')" class="rounded-md bg-blue-500 px-5 py-3 text-white font-medium">Search</Link>
                </div>
            </div>
        </div>
    </div>

</template>
