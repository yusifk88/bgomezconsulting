<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import {ref} from "vue";
import FooterComponent from "@/Components/FooterComponent.vue";

const language = ref("EN");
</script>

<template>
    <v-app>
        <v-app-bar class="pl-md-14 pr-md-14">
            <template v-slot:prepend>
                <application-logo></application-logo>
            </template>
            <template v-slot:append>
                <v-btn href="/" v-if="!$vuetify.display.mobile">Home</v-btn>
                <v-btn :href="route('services')" v-if="!$vuetify.display.mobile">Services</v-btn>
                <v-btn v-if="!$vuetify.display.mobile" :href="route('pricing')">Pricing</v-btn>
                <v-btn v-if="!$vuetify.display.mobile" :href="route('resources')">Resources</v-btn>
                <v-btn v-if="!$vuetify.display.mobile" :href="route('about')">About Us</v-btn>
                <v-btn v-if="!$vuetify.display.mobile" :href="route('contact')">Contact Us</v-btn>
                <v-btn variant="flat">Login</v-btn>
                <v-select class="mt-6 ml-1" density="compact" variant="outlined" :items="['EN','ES']" v-model="language"></v-select>
            </template>
        </v-app-bar>
   <v-main>
       <slot />

       <footer-component></footer-component>
   </v-main>

    </v-app>
</template>
