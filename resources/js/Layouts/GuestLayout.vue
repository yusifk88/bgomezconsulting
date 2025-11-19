<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import {ref} from "vue";
import FooterComponent from "@/Components/FooterComponent.vue";

const language = ref("EN");
</script>

<template>
    <v-app>
        <v-app-bar class="pl-14 pr-14">
            <template v-slot:prepend>
                <v-img width="150" src="/img/logo.svg"></v-img>
            </template>
            <template v-slot:append>
                <v-btn>Home</v-btn>
                <v-btn>Services</v-btn>
                <v-btn>Pricing</v-btn>
                <v-btn>Resources</v-btn>
                <v-btn>About Us</v-btn>
                <v-btn variant="flat">Login</v-btn>
                <v-select class="mt-6 ml-1" density="compact" variant="outlined" :items="['EN','SP']" v-model="language"></v-select>
            </template>
        </v-app-bar>
   <v-main>
       <slot />

       <footer-component></footer-component>
   </v-main>

    </v-app>
</template>
