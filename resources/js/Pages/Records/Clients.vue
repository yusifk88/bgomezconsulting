<template>
    <Head title="Clients"></Head>
    <authenticated-layout>

        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg mt-5 pa-3"
                >

                    <v-list>
                        <v-list-item :href="route('records.clients.show',client.id)" variant="outlined" v-for="client in clients.data" :key="client.id">
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


                </div>
            </div>
        </div>
    </authenticated-layout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import {formatDateTime} from "@/utility.js";

export default {
    name: "Clients",
    methods: {formatDateTime},
    props: {
        clients: {
            type: Object
        }
    },
    components: {Head, AuthenticatedLayout}
}
</script>

<style scoped>

</style>
