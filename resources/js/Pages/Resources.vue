<template>

    <Head title="Resources"></Head>
    <guest-layout>
        <v-sheet class="bg-grey-lighten-5 pa-md-14 pa-4">
            <p class="text-center font-weight-black primary-text text-h3">Useful Resources & Tools</p>
            <p class="text-center text-body-1">Find useful resources and calculators for financial needs and answers to all your quantions</p>
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

        </v-sheet>


    </guest-layout>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

export default {
    name: "Resources",
    components: {GuestLayout, Head},
    data(){
        return{
            items:[
                {
                    title:"Inflation Calculator",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=bud01"
                }
                ,
                {
                    title:"Cashflow Calculator",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=bud10"
                }
                ,
                {
                    title:"Estate tax liability",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc01"
                }
                ,
                {
                    title:"Should I itemize or take the standard deduction?",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc10"
                }
                ,
                {
                    title:"What is my tax-equivalent yield?",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc11"
                }
                   ,
                {
                    title:"2025 tax refund estimator",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc12"
                }
                    ,
                {
                    title:"Tax freedom day",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc13"
                }
                ,
                {
                    title:"2025 federal income tax calculator",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc02"
                }
                 ,
                {
                    title:"Should I adjust my payroll withholdings?",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc03"
                }
                  ,
                {
                    title:"Will my investment interest be deductible?",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc04"
                }
                   ,
                {
                    title:"Long-term Capital Gains Tax Estimator",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc06"
                }

                ,
                {
                    title:"Compare taxable, tax-deferred and tax-free investment growth",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc07"
                }

                ,
                {
                    title:"How much of my social security benefit may be taxed?",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc08"
                }   ,
                {
                    title:"What are the tax implications of paying interest?",
                    link:"https://www.yourtaxedge.com/calcloader.php?calc=inc09"
                }

            ]
        }
    }
}
</script>

<style scoped>

</style>
