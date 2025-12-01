<template>

    <v-sheet class="pa-md-14">
        <v-card variant="flat" class="border-cyan">
            <v-card-text>

            <v-row>

                <v-col cols="12">
                    <v-card variant="flat" rounded="xl">

                        <v-img
                            class="align-end"
                            gradient="to bottom, rgba(0,0,0,.1), rgba(28, 49, 90, 0.95)"
                            cover src="/img/man-in-orange.jpg">
                            <aos-vue animation="fade-up">


                            <v-card-title class="text-white text-h5 text-center text-wrap">
                                <h2 class="text-md-h2 font-weight-black"  v-html="locale().trans.tax_call_out">
                                </h2>
                            </v-card-title>
                            <v-card-text>
                                <p class="text-md-h5 text-white pa-md-14 text-center">
                                    {{locale().trans.tax_call_out_description}}
                                    </p>

                                <p class="text-center mt-5 mb-5 mb-md-14">

                                    <v-btn :block="$vuetify.display.mobile" color="white" size="x-large" variant="outlined" class="mr-2">{{locale().trans.make_appointment}}</v-btn>
                                    <v-btn :href="route('register')" :block="$vuetify.display.mobile" size="x-large" color="cyan" class="text-white ml-md-2 mt-4 mt-md-0">{{locale().trans.get_started}} <v-icon>mdi-arrow-right</v-icon></v-btn>
                                </p>

                            </v-card-text>
                            </aos-vue>
                        </v-img>



                    </v-card>
                </v-col>
            </v-row>
            </v-card-text>
        </v-card>

    </v-sheet>
</template>

<script>
import {locale} from "@/utility.js";

export default {
    name: "CallOutComponent",
    methods: {locale}
}
</script>

<style scoped>
.text-primary{
    color: #1C315AFF !important;
}
</style>
