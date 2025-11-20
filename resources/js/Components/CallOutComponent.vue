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
                                <h2 class="text-md-h2">
                                    Do your taxes the right way<br v-if="!$vuetify.display.mobile"> with <span style="border-bottom: 5px solid cyan">professional</span> support
                                </h2>
                            </v-card-title>
                            <v-card-text>
                                <p class="text-md-h5 text-white pa-md-14 text-center">Your taxes should be done right and we are here make sure you get just that and more with a team of professionals with
                                    the sole purpose of making sure you and your business can thrive.</p>

                                <p class="text-center mt-5 mb-5 mb-md-14">

                                    <v-btn :block="$vuetify.display.mobile" color="white" size="x-large" variant="outlined" class="mr-2">Make Appointment</v-btn>
                                    <v-btn :block="$vuetify.display.mobile" size="x-large" color="cyan" class="text-white ml-md-2 mt-4 mt-md-0">Get Started <v-icon>mdi-arrow-right</v-icon></v-btn>
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
export default {
    name: "CallOutComponent"
}
</script>

<style scoped>
.text-primary{
    color: #1C315AFF !important;
}
</style>
