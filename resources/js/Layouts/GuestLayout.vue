<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Head, Link} from '@inertiajs/vue3';
import {onMounted, ref} from "vue";
import FooterComponent from "@/Components/FooterComponent.vue";
import {locale} from "@/utility.js";
import NavLink from "@/Components/NavLink.vue";
const language = ref(locale().local);

</script>

<template>
    <Head>
        <link rel="icon" href="https://flobaze.atl1.cdn.digitaloceanspaces.com/public/logo.svg"></link>
        <meta property="og:title" content="Bgomez Consulting" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://bgomezconsulting.com" />
        <meta property="og:image" content="https://flobaze.atl1.cdn.digitaloceanspaces.com/public/bg-shot.webp" />
        <meta name="twitter:title" content="Bgomez Consulting">
        <meta name="twitter:description" content="We make taxes less taxing">
        <meta name="twitter:image" content="https://flobaze.atl1.cdn.digitaloceanspaces.com/public/bg-shot.webp">
        <meta name="twitter:card" content="We make taxes less taxing">
    </Head>
    <v-app>
        <v-app-bar class="pl-md-14 pr-md-14">
            <template v-slot:prepend>
                <application-logo></application-logo>
            </template>
            <template v-slot:append>
                <v-btn href="/" v-if="!$vuetify.display.mobile">{{ locale().trans.home }}</v-btn>
                <v-btn active-color="cyan" :active="route().current('services')" :href="route('services')" v-if="!$vuetify.display.mobile">{{ locale().trans.services }}</v-btn>
                <v-btn active-color="cyan"  :active="route().current('pricing')" v-if="!$vuetify.display.mobile" :href="route('pricing')">{{ locale().trans.pricing }}</v-btn>
                <v-btn active-color="cyan"  :active="route().current('resources')" v-if="!$vuetify.display.mobile" :href="route('resources')">{{ locale().trans.resources }}</v-btn>
                <v-btn active-color="cyan"  :active="route().current('about')" v-if="!$vuetify.display.mobile" :href="route('about')">{{ locale().trans.about_us }}</v-btn>
                <v-btn active-color="cyan"  :active="route().current('contact')" v-if="!$vuetify.display.mobile" :href="route('contact')">{{ locale().trans.contact_us }}</v-btn>
                <v-btn active-color="cyan"  :active="route().current('login')" variant="flat" :href="route('login')">{{ locale().trans.login }}</v-btn>
                <v-select
                    class="mt-6 ml-1"
                    density="compact"
                    variant="outlined"
                    :items="['en','es']"
                    v-model="language">
                    <template v-slot:item="{props,item}">
                        <v-list-item v-bind="props" :href="route('changeLanguage',item.title)">
                            <v-list-item-title>
                            </v-list-item-title>
                        </v-list-item>
                    </template>
                </v-select>
            </template>
        </v-app-bar>
        <v-main>
            <slot/>

            <footer-component></footer-component>
        </v-main>

    </v-app>
</template>
