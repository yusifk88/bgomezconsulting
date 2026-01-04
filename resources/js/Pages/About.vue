<template>
    <Head title="About"></Head>
    <guest-layout>
        <v-sheet style="background-color: #1C315A">
            <v-row dense no-gutters>
                <v-col cols="12" sm="6">
                    <v-sheet class="pa-md-14 pa-4 text-white bg-transparent">
                        <aos-vue animation="fade-up">
                            <h1 class="text-h3 font-weight-black mt-15">{{locale().trans.about_us}}</h1>

                            <span v-html="locale().trans.about_page_text">

                            </span>


                            <p class="font-weight-black text-h5 mt-3">{{locale().trans.mission}}</p>
                            <p class="mt-2">{{locale().trans.mission_text}}</p>


                            <p class="font-weight-black text-h5 mt-3">{{locale().trans.vision}}</p>
                            <p class="mt-2">{{locale().trans.vision_text}} </p>


                        </aos-vue>
                    </v-sheet>


                </v-col>

                <v-col cols="12" sm="6">
                    <aos-vue animation="fade-in">
                    <v-img src="/img/team.jpg" style="border-left: 10px solid orange">
                    </v-img>
                    </aos-vue>

                </v-col>

            </v-row>
        </v-sheet>

        <v-sheet>
            <v-row dense no-gutters>
                <v-col cols="12" sm="6">
                    <aos-vue animation="fade-in">
                        <v-img style="border-right: 10px solid #1C315A" src="/img/ceo.jpeg"></v-img>
                    </aos-vue>
                </v-col>

                <v-col cols="12" sm="6">
                    <v-sheet class="pa-md-14 pa-4  bg-transparent">

                        <aos-vue animation="fade-up">

                    <h1 class="text-h4 font-weight-black mt-md-15">{{locale().trans.meet_founder}}</h1>
                        <p class="mt-3 text-body-1" v-html="locale().trans.founder_info">
                        </p>
                        </aos-vue>

                    </v-sheet>
                </v-col>

            </v-row>
        </v-sheet>
    </guest-layout>


</template>

<script>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {locale} from "@/utility.js";

export default {
    name: "About",
    methods: {locale},
    components: {GuestLayout, Head},
    mounted() {

    }
}
</script>

<style scoped>

</style>
