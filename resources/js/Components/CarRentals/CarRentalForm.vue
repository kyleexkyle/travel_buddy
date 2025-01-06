<script setup>

</script>

<template>
    <div class="bg-blue-800">
        <div class="flex items-center justify-center relative py-12">
            <div class="bg-white p-4 shadow-lg shadow-blue-300 rounded-md -bottom-6 absolute space-x-2 flex">

                <div class="flex flex-col">
                    <label for="pick_up_location">Pick-up location</label>
                    <input id="pick_up_location" class="rounded-md border border-gray-200 shadow py-3" type="text" placeholder="Location/Land-mark">
                </div>

                <div class="flex flex-col">
                    <label for="pick_up_date">Pick-up Date</label>
                    <input id="pick_up_date" class="rounded-md border border-gray-200 shadow py-3" type="datetime-local" placeholder="Pick-up Date">
                </div>


                <div class="flex flex-col">
                    <label for="drop_off_date">Drop-off Date</label>
                    <input id="drop_off_date" class="rounded-md border border-gray-200 shadow py-3" type="datetime-local" placeholder="Drop-off Date">
                </div>

                <div class="flex items-end">
                    <button class="rounded-md bg-blue-500 px-5 py-3 text-white font-medium">Search</button>
                </div>
            </div>
        </div>
    </div>

</template>
