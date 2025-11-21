
<template>
    <Head title="Welcome" />
    <guest-layout>
        <main-jumbo-throne></main-jumbo-throne>
        <services-component></services-component>

        <call-out-component></call-out-component>

    </guest-layout>

</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import MainJumboThrone from "@/Components/MainJumboThrone.vue";
import ServicesComponent from "@/Components/ServicesComponent.vue";
import CallOutComponent from "@/Components/CallOutComponent.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    }
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

