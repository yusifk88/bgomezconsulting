<template>

    <Head title="Resources"></Head>
    <guest-layout>
        <v-sheet class="bg-grey-lighten-5 pa-md-14 pa-4">
            <aos-vue animation="fade-up">

            <p class="text-center font-weight-black primary-text text-h3">{{locale().trans.resources_tools}}</p>
            <p class="text-center text-body-1">{{locale().trans.resources_tools_text}}</p>
<v-row class="mt-5">
    <v-col cols="12" sm="6" class="mx-auto">
        <v-list>
            <v-list-item
            v-for="(link,index) in items"
            class="border-b"
            :href="link.link"
            target="_blank"
            >
                <v-list-item-title class="text-body-1">{{link.title}}
                <sup><v-icon size="small">mdi-open-in-new</v-icon></sup>
                </v-list-item-title>

            </v-list-item>
        </v-list>
    </v-col>
</v-row>
            </aos-vue>

        </v-sheet>


    </guest-layout>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {locale} from "@/utility.js";

export default {
    name: "Resources",
    methods: {locale},
    components: {GuestLayout, Head},
    data(){
        return{
            items:[
                {
                    title:locale().trans.inflation,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=bud01"
                }
                ,
                {
                    title:locale().trans.cashflow,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=bud10"
                }
                ,
                {
                    title:locale().trans.estate_tax,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc01"
                }
                ,
                {
                    title:locale().trans.itemize_or_standard,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc10"
                }
                ,
                {
                    title:locale().trans.my_tax_equivalent,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc11"
                }
                   ,
                {
                    title:locale().trans.tax_refund,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc12"
                }
                    ,
                {
                    title:locale().trans.tax_freedom,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc13"
                }
                ,
                {
                    title:locale().trans.incoms_tax,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc02"
                }
                 ,
                {
                    title:locale().trans.withholdings,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc03"
                }
                  ,
                {
                    title:locale().trans.deductible,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc04"
                }
                   ,
                {
                    title:locale().trans.gain_tax,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc06"
                }

                ,
                {
                    title:locale().trans.tax_free,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc07"
                }

                ,
                {
                    title:locale().trans.social_security,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc08"
                }   ,
                {
                    title:locale().trans.interest,
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc09"
                }

            ]
        }
    }
}
</script>

<style scoped>

</style>
