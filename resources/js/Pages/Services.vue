<template>

    <Head title="Services"></Head>
    <GuestLayout>

        <p class="text-center pa-2 " style="background-color: #83FFFF">We offer a variety of services for businesses and individuals</p>
        <services-component></services-component>
    </GuestLayout>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ServicesComponent from "@/Components/ServicesComponent.vue";

export default {
    name: "Services",
    components: {ServicesComponent, GuestLayout, Head}
}
</script>

<style scoped>

</style>
