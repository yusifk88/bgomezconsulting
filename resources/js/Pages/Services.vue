<template>

    <Head title="Services"></Head>
    <GuestLayout>

        <p class="text-center pa-2 " style="background-color: #83FFFF">{{locale().trans.we_offer_services}}</p>
        <services-component></services-component>
    </GuestLayout>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ServicesComponent from "@/Components/ServicesComponent.vue";
import {locale} from "@/utility.js";

export default {
    name: "Services",
    methods: {locale},
    components: {ServicesComponent, GuestLayout, Head}
}
</script>

<style scoped>

</style>
