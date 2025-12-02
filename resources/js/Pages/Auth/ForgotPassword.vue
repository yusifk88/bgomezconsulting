<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, useForm} from '@inertiajs/vue3';
import {locale} from "@/utility.js";

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password"/>

        <v-sheet class="pa-md-14 bg-grey-lighten-5">

            <v-row>
                <v-col cols="12" sm="4" class="mx-auto">

                    <v-card variant="flat">
                        <v-card-text>


                            <p class="text-h5 font-weight-black">{{locale().trans.reset_password}}</p>

                            <div class="mb-4 mt-4 text-sm text-gray-600">

                                {{locale().trans.forgot_password_details}}

                            </div>

                            <div
                                v-if="status"
                                class="mb-4 text-sm font-medium text-green-600"
                            >
                                {{ status }}
                            </div>

                            <form @submit.prevent="submit">
                                <div>
                                    <InputLabel for="email" :value="locale().trans.email"/>

                                    <TextInput
                                        id="email"
                                        type="email"
                                        class="mt-1 block w-full"
                                        v-model="form.email"
                                        required
                                        autofocus
                                        autocomplete="username"
                                    />

                                    <InputError class="mt-2" :message="form.errors.email"/>
                                </div>

                                <div class="mt-4 flex items-center justify-end">
                                    <PrimaryButton
                                        :class="{ 'opacity-25': form.processing }"
                                        :disabled="form.processing"
                                    >
                                        {{locale().trans.email_password_reset}}
                                    </PrimaryButton>
                                </div>
                            </form>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-sheet>

    </GuestLayout>
</template>
