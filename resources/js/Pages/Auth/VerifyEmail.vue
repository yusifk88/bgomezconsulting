<script setup>
import { computed } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import {locale} from "@/utility.js";

const props = defineProps({
    status: {
        type: String,
    },
});

const form = useForm({});

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(
    () => props.status === 'verification-link-sent',
);
</script>

<template>
    <GuestLayout>
        <Head title="Email Verification" />
        <v-sheet class="pa-md-14 pa-4">

            <aos-vue animation="fade-up">

            <v-row>
                <v-col cols="12" sm="4" class="mx-auto">

                <div class="mb-4 text-sm text-gray-600">

                    <v-avatar size="120" rounded="lg">
                        <v-img src="https://flobaze.atl1.cdn.digitaloceanspaces.com/public/check.svg"></v-img>
                    </v-avatar>

                    <p class="font-weight-black text-h4 mt-4">{{locale().trans.varify_its_you}}</p>
           {{locale().trans.verify_title}}
        </div>

        <div
            class="mb-4 text-sm font-medium text-green-600"
            v-if="verificationLinkSent"
        >
            {{locale().trans.verification_sent}}
        </div>

        <form @submit.prevent="submit">
            <div class="mt-4 flex items-center justify-between">
                <PrimaryButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                {{locale().trans.resend_email_verification}}
                </PrimaryButton>

                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >{{locale().trans.logout}}</Link
                >
            </div>
        </form>

                </v-col>
            </v-row>
            </aos-vue>

        </v-sheet>
    </GuestLayout>
</template>
