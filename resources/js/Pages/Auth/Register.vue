<template>
    <GuestLayout>
        <Head title="Register" />

        <v-sheet class="bg-grey-lighten-5 pa-md-14 pa-4">

        <v-row class="ma-8" no-gutters>
            <v-col cols="12" sm="4">
                <aos-vue animation="fade-up">

                <v-card variant="flat" class="mt-3">
                    <v-card-text>


                <p class="text-center pa-3 text-h5">{{locale().trans.get_started_with_your_texes}}</p>
                <form @submit.prevent="submit" class="pa-4">
                    <div>
                        <InputLabel for="name" :value="locale().trans.name" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="email" :value="locale().trans.email" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password" :value="locale().trans.password" />

                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password"
                            required
                            autocomplete="new-password"
                        />

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            for="password_confirmation"
                            :value="locale().trans.confirm +' '+locale().trans.password"
                        />

                        <TextInput
                            id="password_confirmation"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password_confirmation"
                            required
                            autocomplete="new-password"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.password_confirmation"
                        />
                    </div>

                    <div class="mt-4 flex items-center justify-end">
                        <Link
                            :href="route('login')"
                            class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            {{locale().trans.already_registered}}?
                        </Link>

                        <PrimaryButton
                            size="large"
                            class="ms-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            {{locale().trans.register}}
                        </PrimaryButton>
                    </div>
                </form>
                    </v-card-text>
                </v-card>
                </aos-vue>

            </v-col>
            <v-col cols="12" sm="8">
                <aos-vue animation="fade-up">

                <p style="color: #1C315A" class="pa-14 text-center text-h2 font-weight-black" v-html="locale().trans.tax_with_us"></p>
                <p class="text-center pl-14 pb-14">{{locale().trans.create_account}}</p>
                </aos-vue>

            </v-col>
        </v-row>
        </v-sheet>


    </GuestLayout>
</template>

<script>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import {locale} from "@/utility.js";

export default {
    components:{Head, Link, GuestLayout,InputError,InputLabel,PrimaryButton,TextInput},
    data(){
        return{
            form :useForm({
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            })
        }
    },
    methods:{
        locale,
        submit() {
            this.form.post(route('register'), {
                onFinish: () => form.reset('password', 'password_confirmation'),
            });
        }
    }
}



</script>

