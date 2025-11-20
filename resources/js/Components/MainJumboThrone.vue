<template>
<v-sheet class="pa-md-14 pa-4 primary-bg text-white">
    <v-row dense>
        <v-col cols="12" sm="6">
            <h1 class="text-h5 pa-1 pl-0 text-cyan-accent-1 rounded-xl" style="width: auto!important;">
                BGomez Consulting Services
            </h1>
            <aos-vue animation="fade-right">
            <p class="text-h1 mt-5 font-weight-black">We make <span style="border-bottom:5px solid cyan ">taxes</span> less taxing</p>
            <p class="text-h5 mt-6">
                Experts in accounting ready to help<br v-if="!$vuetify.display.mobile"> your business thrive.
            </p>
            </aos-vue>
            <p class="mt-10">
                <v-btn :block="$vuetify.display.mobile" color="cyan" size="x-large" class="text-white mt-4">Get Started</v-btn>

                <v-btn :block="$vuetify.display.mobile" color="cyan" size="x-large" class="ml-md-3 mt-4" variant="outlined">Make Appointment</v-btn>
            </p>
        </v-col>
        <v-col cols="12" sm="6">
            <aos-vue animation="fade-up">

            <v-img class="rounded-xl" style="border-left: 10px solid cyan;border-bottom: 10px solid cyan" src="/img/woman.jpg"></v-img>
            </aos-vue>
        </v-col>
    </v-row>

</v-sheet>

</template>

<script>
export default {
    name: "MainJumboThrone"
}
</script>

<style scoped>
.primary-bg{
    background-color: #1C315A;
}

</style>
