<template>
   <testimonial-component></testimonial-component>

    <v-sheet class="pa-md-14 pa-4">
        <v-row>
            <v-col cols="12" sm="6">
                <aos-vue animation="fade-right">

                <h1 class="text-h3 pa-md-5 font-weight-black mt-md-16">We are here to make sure you <br> and your business <span style="border-bottom: 5px solid cyan">thrive</span></h1>
                <p class="text-body-1 pa-md-5">
                    Here at Bgomez Consulting, we are open to individuals and businesses of all sizes, from bookkeeping
                    services for your businesses to individuals or families tax filing needs our experts in bookkeeping and tax got you covered
                </p>

                <v-list-item class="bg-list-item rounded-lg" lines="three">
                    <template v-slot:prepend>
                        <v-avatar color="#01FFFF" size="80" class="pa-4">
                            <v-img src="/img/tax2.svg"></v-img>
                        </v-avatar>
                    </template>
                    <v-list-item-title class="text-h5 font-weight-black">
                        Tax Preparation and Planning
                    </v-list-item-title>
                    <v-list-item-subtitle class="text-body-1">
                      Our experts in tax will go through your earnings and spending, analyse and find out the exact amount of tax deductions that you should pay and your refunds.
                    </v-list-item-subtitle>
                </v-list-item>

                <v-list-item class="bg-list-item rounded-lg" lines="three">
                    <template v-slot:prepend>
                        <v-avatar color="#01FFFF" size="80" class="pa-4">
                            <v-img src="/img/globe.svg"></v-img>
                        </v-avatar>
                    </template>
                    <v-list-item-title class="text-h5 font-weight-black">
                        Bookkeeping And Virtual CFO
                    </v-list-item-title>
                    <v-list-item-subtitle class="text-body-1">
                        Our team of professional accountants keep track of your daily income and expense records,
                        prepare weekly and monthly reports to give clarity to your business and offer financial advice based the outcome of the reports
                    </v-list-item-subtitle>
                </v-list-item>

                <v-list-item class="bg-list-item rounded-lg" lines="three">
                    <template v-slot:prepend>
                        <v-avatar color="#01FFFF" size="80" class="pa-4">
                            <v-img src="/img/tax_cal.svg"></v-img>
                        </v-avatar>
                    </template>
                    <v-list-item-title class="text-h5 font-weight-black">
                        IRS Tax Problems
                    </v-list-item-title>
                    <v-list-item-subtitle class="text-body-1">
                       our team of ITIN experts will handle your IRS W-7 registration and notary, we ensure accuracy and professionalism in the process to give the best.
                    </v-list-item-subtitle>
                </v-list-item>
                </aos-vue>

            </v-col>

            <v-col cols="12" sm="6">
                <aos-vue animation="fade-in">

                <v-img class="ma-md-14 rounded-xl" src="/img/team-2.jpg"></v-img>
                </aos-vue>
            </v-col>
        </v-row>

    </v-sheet>

    <v-sheet class="pa-md-14 pa-4" color="#1C315A">
        <aos-vue animation="fade-up">

        <p class="text-center text-white text-h5">Need Help with tax & bookkeeping?</p>
        <p class="text-center mt-5 text-md-h3 text-h5 font-weight-black">
            <v-avatar v-if="!$vuetify.display.mobile" size="70" color="cyan" rounded="xl">
                <v-icon size="50" color="#1C315A">mdi-phone</v-icon>
            </v-avatar>
            +1 (863) 618 - 7538
            &nbsp;
            &nbsp;
            &nbsp;

            <v-avatar v-if="!$vuetify.display.mobile" size="70" color="cyan" rounded="xl">
                <v-icon size="50" color="#1C315A">mdi-email-arrow-right-outline</v-icon>
            </v-avatar>
            info@bgomezconsulting.com
        </p>
        </aos-vue>
    </v-sheet>

    <v-footer class="d-flex flex-column ga-2 py-4" color="grey-lighten-3">
        <div class="d-flex ga-3">
            <v-btn
                v-for="icon in socials"
                :key="icon.icon"
                :icon="icon.icon"
                density="comfortable"
                variant="text"
                :href="icon.link"
                target="_blank"
            ></v-btn>
        </div>

        <v-divider class="my-2" thickness="2" width="50"></v-divider>

        <v-container fluid class="pl-md-14 pr-md-14 text-primary">
            <v-row dense>
                <v-col cols="12" sm="8" class="mx-auto">
                    <v-row>
                        <v-col cols="12" sm="4">
                            <h2 class="text-primary font-weight-black">BGomez <span style="border-bottom: 5px solid cyan">Consulting</span>
                            </h2>

                            <p class="mt-5">13844 2nd St Fort Myers, FL 33905</p>
                            <p>+1 (863) - 618 - 7538</p>
                        </v-col>

                        <v-col cols="12" sm="3">
                            <h2 class="font-weight-black">Main <span style="border-bottom: 5px solid cyan">Links</span></h2>

                            <v-list-item class="pl-0">
                                <v-list-item-title>Home</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0" :href="route('services')">
                                <v-list-item-title>Services</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0" :href="route('pricing')">
                                <v-list-item-title>Pricing</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0">
                                <v-list-item-title>About Us</v-list-item-title>
                            </v-list-item>

                        </v-col>

                        <v-col cols="12" sm="5">
                            <h2 class="font-weight-black">Resources </h2>

                            <v-list-item class="pl-0">
                                <v-list-item-title>Login</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0 rounded-xl" href="https://www.yourtaxedge.com/calcloader.php?calc=bud01"
                                         target="_blank">
                                <v-list-item-title>Inflation Calculator</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=bud10"
                                         target="_blank">
                                <v-list-item-title>Cashflow Calculator</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc01"
                                         target="_blank">
                                <v-list-item-title>Estate tax liability</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc10"
                                         target="_blank">
                                <v-list-item-title>Should I itemize or take the standard deduction?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc11"
                                         target="_blank">
                                <v-list-item-title>What is my tax-equivalent yield?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc12"
                                         target="_blank">
                                <v-list-item-title>2025 tax refund estimator</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc13"
                                         target="_blank">
                                <v-list-item-title>Tax freedom day</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc02"
                                         target="_blank">
                                <v-list-item-title>2025 federal income tax calculator</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc03"
                                         target="_blank">
                                <v-list-item-title>Should I adjust my payroll withholdings?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc04"
                                         target="_blank">
                                <v-list-item-title>Will my investment interest be deductible?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc06"
                                         target="_blank">
                                <v-list-item-title>Long-term Capital Gains Tax Estimator</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc07"
                                         target="_blank">
                                <v-list-item-title>Compare taxable, tax-deferred and tax-free investment growth</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc08"
                                         target="_blank">
                                <v-list-item-title>How much of my social security benefit may be taxed?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc09"
                                         target="_blank">
                                <v-list-item-title>What are the tax implications of paying interest?</v-list-item-title>
                            </v-list-item>

                        </v-col>

                    </v-row>

                </v-col>
            </v-row>
        </v-container>


        <v-divider></v-divider>

        <div>
            {{ new Date().getFullYear() }} — <strong>Gbomez Consulting</strong>
        </div>
    </v-footer>
</template>

<script>
import TestimonialComponent from "@/Components/TestimonialComponent.vue";

export default {
    name: "FooterComponent",
    components: {TestimonialComponent},
    data() {
        return {

            socials: [
                {
                    icon: 'mdi-facebook',
                    link: "#"
                },
                {
                    icon: 'mdi-linkedin',
                    link: "#"
                }
                ,
                {
                    icon: 'mdi-instagram',
                    link: "#"
                }
            ],

        }
    }

}
</script>

<style scoped>
.text-primary {
    color: #1C315AFF !important;
}
.bg-list-item{
    transition: 0.3s ease-in-out;
    margin-top: 2rem;
}
.bg-list-item:hover{
    background-color: cyan;
}
</style>
