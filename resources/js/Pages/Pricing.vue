<template>
<Head title="Pricing"></Head>
    <guest-layout>
        <v-sheet class="pa-md-14 pa-4 sheet-gradient">
            <h1 class="text-center text-white text-h3">
                {{locale().trans.progressive_pricing}}
            </h1>
            <p class="text-center text-body-1 text-white"> {{locale().trans.pricing_offer}} </p>
            <v-row class="mt-8">
                <v-col cols="12" sm="4">
                    <aos-vue animation="fade-up">

                    <v-card variant="flat" rounded="xl">
                        <v-card-text>
                            <p class="font-weight-black text-h6">{{locale().trans.itin}}</p>
                            <p>{{locale().trans.ira_form}}</p>
                            <p class="font-weight-black text-h4 mt-4">{{locale().trans.starts_at}} $150.00</p>
                            <p>{{locale().trans.billed_per_form}}</p>

                            <v-btn block class="mt-5" size="x-large">{{locale().trans.get_started}}</v-btn>

                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Consultation</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Document Collection & Verification</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Form Preparation</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Compliance Review</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Submission Processing</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Post-Submission Support</v-list-item-title>
                            </v-list-item>

                        </v-card-text>
                    </v-card>
                    </aos-vue>
                </v-col>
                <v-col cols="12" sm="4">
                    <aos-vue animation="fade-up">

                    <v-card variant="flat" rounded="xl">
                        <v-card-text>
                            <p class="font-weight-black text-h6">Accounting, Bookkeeping & Payroll</p>
                            <p>Income and expense categorization and financial reporting</p>
                            <p class="font-weight-black text-h4 mt-4">{{locale().trans.starts_at}} $550.00</p>
                            <p>{{locale().trans.billed_monthly}}</p>

                            <v-btn block class="mt-5" size="x-large">{{locale().trans.get_started}}</v-btn>

                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Setup & Assessment</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Document Collection & Verification</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Daily Bookkeeping Tasks</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Financial Reporting</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Expense & Income Management</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Payroll Tax Filing & Compliance</v-list-item-title>
                            </v-list-item>

                        </v-card-text>
                    </v-card>
                    </aos-vue>
                </v-col>
                <v-col cols="12" sm="4">
                    <aos-vue animation="fade-up">

                    <v-card variant="flat" rounded="xl">
                        <v-card-text>
                            <p class="font-weight-black text-h6">Tax Preparation</p>
                            <p>Analyse, determine and prepare tax for filing</p>
                            <p class="font-weight-black text-h4 mt-4">{{locale().trans.starts_at}} $350</p>
                            <p>{{locale().trans.billed_per_task}}</p>

                            <v-btn block class="mt-5" size="x-large">{{locale().trans.get_started}}</v-btn>

                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Consultation & Assessment</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Document Collection</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Data Verification & Organization</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Tax Deductions & Credits Review</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Tax Form Preparation</v-list-item-title>
                            </v-list-item>


                            <v-list-item class="mt-5">
                                <template v-slot:prepend>
                                    <v-icon>mdi-check-circle-outline</v-icon>
                                </template>
                                <v-list-item-title>Compliance & Tax Review</v-list-item-title>
                            </v-list-item>

                        </v-card-text>
                    </v-card>
                    </aos-vue>
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
    name: "Pricing",
    methods: {locale},
    components: {GuestLayout, Head}
}
</script>

<style scoped>

.sheet-gradient{
    background: #1C315A;
    background: linear-gradient(90deg, rgba(28, 49, 90, 1) 0%, rgba(28, 49, 90, 1) 61%, rgba(1, 255, 255, 1) 100%);
}
</style>
