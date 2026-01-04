<template>
<v-sheet class="pa-md-14 pa-4 primary-bg text-white">
    <v-row dense>
        <v-col cols="12" sm="6">
            <h1 class="text-h5 pa-1 pl-0 text-cyan-accent-1 rounded-xl" style="width: auto!important;">
                BGomez {{t.trans.consulting_services}}
            </h1>
            <aos-vue animation="fade-right">
            <p class="text-h1 mt-5 font-weight-black" v-if="t.local.toLowerCase()=='es'">
                <span style="border-bottom:5px solid cyan ">Ahorra</span> en impuestos, gana en tranquilidad.
                </p>
            <p class="text-h1 mt-5 font-weight-black" v-else>
                <span style="border-bottom:5px solid cyan ">Save</span> on taxes , gain peace of mind.
               </p>

                <p class="text-h5 mt-6">
                    {{t.trans.tagline}}
            </p>
            </aos-vue>
            <p class="mt-10">
                <v-btn :block="$vuetify.display.mobile"
                       color="cyan"
                       size="x-large"
                       class="text-white mt-4"
                       :href="route('register')"
                >{{t.trans.get_started}}</v-btn>

                <v-btn :block="$vuetify.display.mobile"
                       color="white"
                       size="x-large"
                       class="ml-md-3 mt-4"
                       variant="outlined">{{t.trans.make_appointment}}</v-btn>
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
import {locale} from "@/utility.js";

export default {
    name: "MainJumboThrone",
    computed:{
        t(){

            return locale();
        }
    },
    mounted() {
        console.log("localization",this.t)
    }
}
</script>

<style scoped>
.primary-bg{
    background-color: #1C315A;
}

</style>
