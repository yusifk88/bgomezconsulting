<template>

    <Head title="Talk To Us"></Head>
    <guest-layout>
        <v-sheet class="pa-md-14 pa-4 bg-grey-lighten-5" style="color: #1C315A!important;">

            <v-row dense>
                <v-col cols="12" sm="6" class="mx-auto">
                    <aos-vue animation="fade-up">
                    <h1 class="text-h3 font-weight-black">Talk To Us</h1>
                    <v-list-item class="border mt-3 rounded-lg" href="tel:+1 (863) 618 - 7538">
                        <template v-slot:prepend>
                            <v-icon size="x-large">mdi-phone</v-icon>
                        </template>
                        <v-list-item-title class="text-h5 font-weight-black">+1 (863) 618 - 7538</v-list-item-title>
                        <v-list-item-subtitle>Give us a call</v-list-item-subtitle>
                    </v-list-item>

                    <v-list-item class="border mt-3 rounded-lg" href="mailto:info@bgomezconsulting.com">
                        <template v-slot:prepend>
                            <v-icon size="x-large">mdi-email-arrow-right-outline</v-icon>
                        </template>
                        <v-list-item-title class="text-h5 font-weight-black">info@bgomezconsulting.com
                        </v-list-item-title>
                        <v-list-item-subtitle>Email us</v-list-item-subtitle>
                    </v-list-item>

                    <p class="text-h4 font-weight-black mt-5">Or find us on the map</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73137.97644904535!2d-81.77290683131834!3d26.709759126190477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db6f232373b9cd%3A0x6093a2f3d96cf869!2sBgomezmanagementLLc!5e1!3m2!1sen!2sus!4v1763751900990!5m2!1sen!2sus" width="100%" height="450" style="border:0;" class="mt-5 rounded-xl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </aos-vue>
                </v-col>
            </v-row>

        </v-sheet>
    </guest-layout>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

export default {
    name: "Contact",
    components: {GuestLayout, Head}
}
</script>

<style scoped>

</style>
