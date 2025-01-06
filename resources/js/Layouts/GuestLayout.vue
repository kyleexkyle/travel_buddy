<script setup>
import {Head, Link, router} from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import DropdownLink from "@/Components/DropdownLink.vue";
import Dropdown from "@/Components/Dropdown.vue";
import BookingNavOptions from "@/Components/Booking/BookingNavOptions.vue";
import BookingNavItems from "@/Components/Booking/BookingNavItems.vue";

defineProps({
    title: String,
});

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>
        <Head :title="title" />

        <div class="min-h-screen bg-gray-100 pb-20">
            <div class="bg-blue-800">
                <nav class="bg-blue-800">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <Link :href="route('landing-page')">
                                        <ApplicationMark class="block h-9 w-auto" />
                                    </Link>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">

                                <div class="ml-3 relative">
                                    <Link href="#" class="text-white">
                                        <button class="border rounded p-1 w-full text-sm">Become a Partner</button>
                                    </Link>
                                </div>

                                <div class="ml-3 relative">
                                    <div v-if="$page.props.auth.user" class="flex items-center">
                                        <!-- Settings Dropdown -->
                                        <div class="ml-3 relative">
                                            <Dropdown align="right" width="48">
                                                <template #trigger>
                                                    <button v-if="$page.props.jetstream.managesProfilePhotos" class=" p-2 space-x-2 flex text-sm text-white rounded-md focus:outline-none hover:bg-blue-900 focus:border-gray-300 transition">
                                                        <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                                        <span class="flex flex-col">
                                                    <span class="font-bold">{{ $page.props.auth.user.name }}</span>
                                                    <span class="">Traveler 1</span>
                                                </span>
                                                    </button>

                                                    <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                                </template>

                                                <template #content>
                                                    <!-- Account Management -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        Manage Account
                                                    </div>

                                                    <DropdownLink :href="route('profile.show')">
                                                        Profile
                                                    </DropdownLink>

                                                    <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                                        API Tokens
                                                    </DropdownLink>

                                                    <div class="border-t border-gray-200" />

                                                    <!-- Authentication -->
                                                    <form @submit.prevent="logout">
                                                        <DropdownLink as="button">
                                                            Log Out
                                                        </DropdownLink>
                                                    </form>
                                                </template>
                                            </Dropdown>
                                        </div>
                                    </div>

                                    <template v-else>
                                        <Link :href="route('login')" class="font-bold text-white">Log in</Link>

                                        <Link :href="route('register')" class="ml-4 font-bold text-white">Register</Link>
                                    </template>
                                </div>


                            </div>


                        </div>
                    </div>
                </nav>

                <BookingNavOptions />
            </div>


            <!-- Page Content -->
            <main>
                <slot name="bookingNavItems"/>
                <slot />
            </main>
        </div>
    </div>
</template>
