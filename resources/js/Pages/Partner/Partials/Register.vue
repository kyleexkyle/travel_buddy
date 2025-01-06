<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Link} from "@inertiajs/vue3";
import { Form, Field, ErrorMessage } from 'vee-validate';
import * as yup from 'yup';
import { ref, computed } from 'vue';

const currentStep = ref(0);

const phoneValidation = /^(?:(?:\+|0{0,2})63|0)2\d{7}$|^(?:(?:\+|0{0,2})63|0)[9]\d{9}$/;

// Each step should have its own validation schema
const schemas = [
    yup.object({
        email: yup.string().required().email(),
    }),
    yup.object({
        firstName: yup.string().required('first name is a required field'),
        lastName: yup.string().required('last name is a required field'),
        phoneNumber: yup.string()
            .required('phone number id required')
            .matches(phoneValidation, 'Phone number is not valid')
    }),
    yup.object({
        password: yup.string().min(8).required(),
        confirmPassword: yup.string()
            .required('confirm password is required')
            .oneOf([yup.ref('password')],'Passwords must match'),
    }),
];

const currentSchema = computed(() => {
    return schemas[currentStep.value];
});

function nextStep(values) {
    if (currentStep.value === 2) {
        console.log('Done: ', JSON.stringify(values, null, 2));
        return;
    }

    currentStep.value++;
}

function prevStep() {
    if (currentStep.value <= 0) {
        return;
    }

    currentStep.value--;
}
</script>

<template>
    <GuestLayout title="Partner Register">
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8 mt-5 flex justify-center items-center">
            <div class="w-96 bg-white p-4 rounded-md">

                <Form
                    @submit="nextStep"
                    :validation-schema="currentSchema"
                    keep-values
                    v-slot="{ handleSubmit, values }"
                 class="flex flex-col space-y-4"
                >
                    <div>
                        <template v-if="currentStep === 0">
                            <div class="space-y-5">
                                <div>
                                    <p class="text-xl font-medium">Create your partner account</p>
                                    <p class="text-sm">Create and account to list and manage your properties</p>
                                </div>

                                <div class="flex flex-col space-y-2">
                                    <label for="email" class="text-sm">Email Address</label>
                                    <Field name="email" id="email" type="email" class="rounded" placeholder="email address" required />
                                    <ErrorMessage class="text-sm text-red-500" name="email" />
                                </div>
                            </div>
                        </template>

                        <template v-if="currentStep === 1">
                            <div class="space-y-5">
                                <div>
                                    <p class="text-xl font-medium">Contact Details</p>
                                    <p class="text-sm">Your full name and phone number are needed</p>
                                </div>

                                <div class="flex flex-col space-y-2">
                                    <label for="firstName" class="text-sm">First Name</label>
                                    <Field name="firstName" id="firstName" type="text" class="rounded" />
                                    <ErrorMessage class="text-sm text-red-500" name="firstName" />
                                </div>

                                <div class="flex flex-col space-y-2">
                                    <label for="lastName" class="text-sm">Last Name</label>
                                    <Field name="lastName" id="lastName" type="text" class="rounded" />
                                    <ErrorMessage class="text-sm text-red-500" name="lastName" />
                                </div>

                                <div class="flex flex-col space-y-2">
                                    <label for="phoneNumber" class="text-sm">Phone Number</label>
                                    <Field name="phoneNumber" id="phoneNumber" type="text" class="rounded" />
                                    <ErrorMessage class="text-sm text-red-500" name="phoneNumber" />
                                </div>
                            </div>

                        </template>

                        <template v-if="currentStep === 2">
                            <div class="space-y-5">
                                <div>
                                    <p class="text-xl font-medium">Create Password</p>
                                    <p class="text-sm">Use a minimum of 8 characters</p>
                                </div>

                                <div class="flex flex-col space-y-2">
                                    <label for="password" class="text-sm">Password</label>
                                    <Field name="password" id="password" type="password" class="rounded" required />
                                    <ErrorMessage class="text-sm text-red-500" name="password" />
                                </div>

                                <div class="flex flex-col space-y-2">
                                    <label for="confirmPassword" class="text-sm">Confirm Password</label>
                                    <Field name="confirmPassword" id="confirmPassword" type="password" class="rounded" required />
                                    <ErrorMessage class="text-sm text-red-500" name="confirmPassword" />
                                </div>
                            </div>
                        </template>
                    </div>

                    <div class="flex justify-between">
                        <button class="w-20 p-2 bg-blue-600 text-white rounded" v-if="currentStep !== 0" type="button" @click="prevStep">
                            Previous
                        </button>

                        <button class="ml-auto w-20 p-2 bg-blue-600 text-white rounded" v-if="currentStep !== 2" type="submit">Next</button>

                        <button class="w-20 p-2 bg-blue-600 text-white rounded" v-if="currentStep === 2" type="submit">Finish</button>

                    </div>

                    <hr>

                    <div class="text-center">
                        <Link :href="route('dashboard')" class="text-blue-600">
                            <button class="border border-blue-600 rounded p-2 w-full">Sign In</button>
                        </Link>
                    </div>
<!--                    <pre>{{ values }}</pre>-->
                </Form>

            </div>
        </div>
    </GuestLayout>
</template>

<style scoped>

</style>
