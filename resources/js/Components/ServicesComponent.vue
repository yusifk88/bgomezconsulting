<template>
<v-sheet class="pa-md-14 pa-4 bg-grey-lighten-3">

    <h1 class="text-center text-h3 text-primary" v-html="locale().trans.call_to_action" >
        </h1>
    <p class="text-center mt-3" v-html="locale().trans.call_to_action_sub">
    </p>

    <v-row dense class="mt-8">
        <v-col cols="12" class="mx-auto">
            <v-row dense>
                <v-col cols="12" sm="3">
                    <aos-vue animation="fade-up">

                    <v-card variant="flat" rounded="xl" class="line-card">
                        <v-card-text>
                            <v-avatar rounded="0">
                                <v-img src="/img/vat.svg"></v-img>
                            </v-avatar>
                            <p class="font-weight-black mt-2">{{locale().trans.tax_preparation}}</p>
                            <p>{{locale().trans.tax_preparation_description}}</p>

                        </v-card-text>

                    </v-card>
                    </aos-vue>
                </v-col>
                <v-col cols="12" sm="3">
                    <aos-vue animation="fade-up">

                    <v-card variant="flat" rounded="xl" class="line-card">
                        <v-card-text>
                            <v-avatar rounded="0">
                                <v-img src="/img/shield.svg"></v-img>
                            </v-avatar>
                            <p class="font-weight-black mt-2">{{locale().trans.bookkeeping}}</p>
                            <p> {{locale().trans.bookkeeping_description}} </p>

                        </v-card-text>
                    </v-card>
                    </aos-vue>
                </v-col>

                <v-col cols="12" sm="3">
                    <aos-vue animation="fade-up">

                    <v-card variant="flat" rounded="xl" class="line-card">
                        <v-card-text>
                            <v-avatar rounded="0">
                                <v-img src="/img/tax2.svg"></v-img>
                            </v-avatar>
                            <p class="font-weight-black mt-2">{{locale().trans.itin}}</p>
                            <p>
                                {{locale().trans.itin_description}}
                            </p>

                        </v-card-text>

                    </v-card>
                    </aos-vue>
                </v-col>

                <v-col cols="12" sm="3">
                    <aos-vue animation="fade-up">

                    <v-card variant="flat" rounded="xl" class="line-card">
                        <v-card-text>
                            <v-avatar rounded="0">
                                <v-img src="/img/tax2.svg"></v-img>
                            </v-avatar>
                            <p class="font-weight-black mt-2">{{locale().trans.business_funding}}</p>
                            <p>
                                {{locale().trans.business_funding_text}}
                            </p>

                        </v-card-text>

                    </v-card>
                    </aos-vue>
                </v-col>

            </v-row>
        </v-col>
    </v-row>

</v-sheet>
</template>

<script>
import {locale} from "@/utility.js";

export default {
    name: "ServicesComponent",
    methods: {locale}
}
</script>

<style scoped>

.text-primary{
    color: #1C315A!important;
}


.line-card{
    transition: 0.3s ease-in-out;
}

.line-card:hover{
    border-top:8px solid cyan;border-left:8px solid cyan;

}
</style>
