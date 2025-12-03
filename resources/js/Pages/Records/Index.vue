<template>
    <Head title="Documents"></Head>
    <authenticated-layout>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg pa-3"
                >
                    <v-list>
                        <v-list-item :href="route('records.show',record.id)" variant="outlined" v-for="record in records.data" :key="record.id">
                            <template v-slot:prepend>
                                <v-icon size="x-large">mdi-file-outline</v-icon>
                            </template>
                            <v-list-item-title>
                                {{ record.title }}
                            </v-list-item-title>
                            <v-list-item-subtitle>
                                 {{ record.description }}
                            </v-list-item-subtitle>
                            <v-list-item-subtitle>
                                Submitted At: {{formatDateTime(record.created_at)}}
                            </v-list-item-subtitle>
                            <template v-slot:append>
                                {{record.files.length}} Files &nbsp;/&nbsp;
                                <status-chip :label="record.status"></status-chip>
                                <v-icon color="gre" size="small">mdi-chevron-right</v-icon>
                            </template>
                        </v-list-item>
                    </v-list>

                    <div class="text-center">
                        <v-btn-group class="mx-auto">
                            <v-btn
                                size="small"
                                color="#1C315A"
                                :variant="link.active ? 'flat' : 'text'"
                                :active="link.active"
                                :href="link.url"
                                :disabled="!Boolean(link.url)"
                                v-for="link in records.links"
                                v-html="link.label"
                            ></v-btn>
                        </v-btn-group>
                    </div>

                </div>
            </div>
        </div>
    </authenticated-layout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import StatusChip from "@/Components/statusChip.vue";
import {formatDateTime} from "@/utility.js";

export default {
    name: "Index",
    methods: {formatDateTime},
    components: {StatusChip, Head, AuthenticatedLayout},
    props: {
        records: {
            type: Object
        }
    }
}
</script>

<style scoped>

</style>
