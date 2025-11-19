<template>
<v-sheet class="pa-14 primary-bg text-white">
    <v-row dense>
        <v-col cols="12" sm="6">
            <h1 class="text-h5 pa-1 pl-0 text-cyan-accent-1 rounded-xl" style="width: auto!important;">
                BGomez Consulting Services
            </h1>
            <p class="text-h1 mt-5 font-weight-black">We make <span style="border-bottom:5px solid cyan ">taxes</span> less taxing</p>
            <p class="text-h5 mt-6">
                Experts in accounting ready to help<br> your business thrive.
            </p>
            <p class="mt-10">
                <v-btn color="cyan" size="x-large" class="text-white">Get Started</v-btn>

                <v-btn color="cyan" size="x-large" class="ml-3" variant="outlined">Make Appointment</v-btn>
            </p>
        </v-col>
        <v-col cols="12" sm="6">
            <v-img class="rounded-xl" style="border-left: 10px solid cyan;border-bottom: 10px solid cyan" src="/img/woman.jpg"></v-img>
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
