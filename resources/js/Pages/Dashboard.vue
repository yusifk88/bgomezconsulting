<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <p class="mb-3 text-gray-900">Summaries</p>
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg pa-3"
                >
                    <v-row>
                        <v-col cols="12" sm="3">
                            <v-card variant="outlined">
                                <v-card-text>
                                    <p class="text-h3 font-weight-black">{{ summaries.users }}</p>
                                    <Link :href="route('records.clients')" class="text-grey-900">Clients</Link>

                                </v-card-text>
                            </v-card>
                        </v-col>

                        <v-col cols="12" sm="3">
                            <v-card variant="outlined">
                                <v-card-text>
                                    <p class="text-h3 font-weight-black">{{ summaries.all_submissions }}</p>
                                    <Link :href="route('records.index')" class="text-grey-900">All Records</Link>

                                </v-card-text>
                            </v-card>
                        </v-col>

                        <v-col cols="12" sm="2">
                            <v-card variant="outlined">
                                <v-card-text>
                                    <p class="text-h3 font-weight-black text-green">
                                        {{ summaries.completed_submissions }}</p>
                                    <Link class="text-grey-900">Completed Records</Link>

                                </v-card-text>
                            </v-card>
                        </v-col>


                        <v-col cols="12" sm="2">
                            <v-card variant="outlined">
                                <v-card-text>
                                    <p class="text-h3 font-weight-black text-orange">
                                        {{ summaries.pending_submissions }}</p>
                                    <Link class="text-grey-900">Pending Records</Link>

                                </v-card-text>
                            </v-card>
                        </v-col>


                        <v-col cols="12" sm="2">
                            <v-card variant="outlined">
                                <v-card-text>
                                    <p class="text-h3 font-weight-black text-red">
                                        {{ summaries.waning_submissions }}</p>
                                    <Link class="text-grey-900">Records With Errors</Link>

                                </v-card-text>
                            </v-card>
                        </v-col>


                    </v-row>

                </div>

                <p class="mb-3 mt-3 text-gray-900">Recent Documents</p>
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg pa-3"
                >
                    <v-list>
                        <v-list-item :href="route('records.show',record.id)" variant="outlined" v-for="record in summaries.recent_records" :key="record.id">
                            <template v-slot:prepend>
                                <v-icon size="x-large">mdi-file-outline</v-icon>
                            </template>
                            <v-list-item-title>
                                {{record.title}}
                            </v-list-item-title>
                            <v-list-item-subtitle>
                                {{record.description}}
                            </v-list-item-subtitle>
                            <v-list-item-subtitle>
                                Submitted At: {{formatDateTime(record.created_at)}}
                            </v-list-item-subtitle>
                            <template v-slot:append>
                                <v-icon color="gre" size="small">mdi-chevron-right</v-icon>
                            </template>
                        </v-list-item>
                    </v-list>

                    <Link class="mt-5" :href="route('records.index')">All Documents <v-icon>mdi-chevron-right</v-icon></Link>

                </div>


             <p class=" mt-3 text-gray-900">Recent Clients</p>
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg pa-3"
                >
                    <v-list>
                        <v-list-item :href="route('records.clients.show',client.id)" variant="outlined" v-for="client in summaries.recent_clients" :key="client.id">
                            <template v-slot:prepend>
                                <v-icon size="x-large">mdi-account-outline</v-icon>
                            </template>
                            <v-list-item-title>
                                {{client.name}}
                            </v-list-item-title>
                            <v-list-item-subtitle>
                               Email: {{client.email}}
                            </v-list-item-subtitle>
                            <v-list-item-subtitle>
                               Phone: {{client.phone}}
                            </v-list-item-subtitle>
                            <v-list-item-subtitle>
                                Registered At:{{formatDateTime(client.created_at)}}
                            </v-list-item-subtitle>
                            <template v-slot:append>
                                <v-icon color="gre" size="small">mdi-chevron-right</v-icon>
                            </template>
                        </v-list-item>
                    </v-list>

                    <Link :href="route('records.clients')" class="mt-5">All Clients <v-icon>mdi-chevron-right</v-icon></Link>

                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3';
import {formatDateTime} from "@/utility.js";

export default {

    name: "Dashboard",
    methods: {formatDateTime},
    components: {Link, Head, AuthenticatedLayout},
    props: {
        summaries: {
            type: Object
        }
    }
}
</script>
