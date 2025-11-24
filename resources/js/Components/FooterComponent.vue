<template>
   <testimonial-component></testimonial-component>

    <v-sheet class="pa-md-14 pa-4">
        <v-row>
            <v-col cols="12" sm="6">
                <aos-vue animation="fade-right">

                <h1 class="text-h3 pa-md-5 font-weight-black mt-md-16" v-html="locale().trans.we_are_here_to_help"></h1>
                <p class="text-body-1 pa-md-5">
                  {{locale().trans.here_to_help}}
                </p>

                <v-list-item class="bg-list-item rounded-lg" lines="three">
                    <template v-slot:prepend>
                        <v-avatar color="#01FFFF" size="80" class="pa-4">
                            <v-img src="/img/tax2.svg"></v-img>
                        </v-avatar>
                    </template>
                    <v-list-item-title class="text-h5 font-weight-black">
                        {{locale().trans.tax_planning}}
                    </v-list-item-title>
                    <v-list-item-subtitle class="text-body-1">
{{locale().trans.tax_planning_text}}
                    </v-list-item-subtitle>
                </v-list-item>

                <v-list-item class="bg-list-item rounded-lg" lines="three">
                    <template v-slot:prepend>
                        <v-avatar color="#01FFFF" size="80" class="pa-4">
                            <v-img src="/img/globe.svg"></v-img>
                        </v-avatar>
                    </template>
                    <v-list-item-title class="text-h5 font-weight-black">
                        {{locale().trans.bookkeeping_cfo}}
                    </v-list-item-title>
                    <v-list-item-subtitle class="text-body-1">
                        {{locale().trans.bookkeeping_cfo_text}}
                    </v-list-item-subtitle>
                </v-list-item>

                <v-list-item class="bg-list-item rounded-lg" lines="three">
                    <template v-slot:prepend>
                        <v-avatar color="#01FFFF" size="80" class="pa-4">
                            <v-img src="/img/tax_cal.svg"></v-img>
                        </v-avatar>
                    </template>
                    <v-list-item-title class="text-h5 font-weight-black">
                        {{locale().trans.tax_problems}}
                    </v-list-item-title>
                    <v-list-item-subtitle class="text-body-1">
                        {{locale().trans.tax_problems_text}}
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

        <p class="text-center text-white text-h5">{{locale().trans.need_help}}?</p>
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
                            <h2 class="text-primary font-weight-black">BGomez <span style="border-bottom: 5px solid cyan">{{locale().trans.consulting_services}}</span>
                            </h2>

                            <p class="mt-5">13844 2nd St Fort Myers, FL 33905</p>
                            <p>+1 (863) - 618 - 7538</p>
                        </v-col>

                        <v-col cols="12" sm="3">
                            <h2 class="font-weight-black" v-html="locale().trans.main_links"></h2>

                            <v-list-item class="pl-0" href="/">
                                <v-list-item-title>{{locale().trans.home}}</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0" :href="route('services')">
                                <v-list-item-title>{{locale().trans.services}}</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0" :href="route('pricing')">
                                <v-list-item-title>{{locale().trans.pricing}}</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0" :href="route('about')">
                                <v-list-item-title>{{locale().trans.about_us}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" :href="route('contact')">
                                <v-list-item-title>{{locale().trans.contact_us}}</v-list-item-title>
                            </v-list-item>

                        </v-col>

                        <v-col cols="12" sm="5">
                            <h2 class="font-weight-black">{{locale().trans.resources}} </h2>

                            <v-list-item class="pl-0" :href="route('login')">
                                <v-list-item-title>{{locale().trans.login}}</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0 rounded-xl" href="https://www.yourtaxedge.com/calcloader.php?calc=bud01"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.inflation}}</v-list-item-title>
                            </v-list-item>
                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=bud10"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.cashflow}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc01"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.estate_tax}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc10"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.itemize_or_standard}}?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc11"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.my_tax_equivalent}}?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc12"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.tax_refund}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc13"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.tax_freedom}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc02"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.incoms_tax}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc03"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.withholdings}}?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc04"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.deductible}}?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc06"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.gain_tax}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc07"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.tax_free}}</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc08"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.social_security}}?</v-list-item-title>
                            </v-list-item>

                            <v-list-item class="pl-0" href="https://www.yourtaxedge.com/calcloader.php?calc=inc09"
                                         target="_blank">
                                <v-list-item-title>{{locale().trans.interest}}?</v-list-item-title>
                            </v-list-item>

                        </v-col>

                    </v-row>

                </v-col>
            </v-row>
        </v-container>


        <v-divider></v-divider>

        <div>
            <p class="text-center">
                <a :href="route('changeLanguage','en')">English</a>
                <a class="ml-3" :href="route('changeLanguage','es')">Espanol</a>

            </p>
            {{ new Date().getFullYear() }} — <strong>BGomez Consulting</strong>
        </div>
    </v-footer>
</template>

<script>
import TestimonialComponent from "@/Components/TestimonialComponent.vue";
import {locale} from "@/utility.js";

export default {
    name: "FooterComponent",
    methods: {locale},
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
