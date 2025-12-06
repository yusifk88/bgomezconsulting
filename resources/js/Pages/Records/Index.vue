<template>
    <Head title="Documents"></Head>
    <authenticated-layout>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg pa-3"
                >
                    <form @submit.prevent="filterForm.get(route('records.index'))">

                        <v-row>

                            <v-col cols="12" sm="2">
                                <label for="client">Client</label>
                                <v-autocomplete
                                    id="client"
                                    name="client"
                                    density="compact"
                                    placeholder="Select Client"
                                    variant="outlined"
                                    v-model="filterForm.client"
                                    clearable
                                    :items="clients"
                                    item-title="name"
                                    item-value="id"
                                ></v-autocomplete>
                            </v-col>

                            <v-col cols="12" sm="2">
                                <label for="status">Status</label>
                                <v-autocomplete
                                    clearable
                                    v-model="filterForm.status"
                                    id="status"
                                    :items="['pending','processing','completed']"
                                    name="status" density="compact" placeholder="Select Status"
                                    variant="outlined"></v-autocomplete>
                            </v-col>

                            <v-col cols="12" sm="2">
                                <label for="from">Submitted From</label>
                                <text-input v-model="filterForm.from" id="from" name="from" type="date" model-value=""/>
                            </v-col>

                            <v-col cols="12" sm="2">
                                <label for="to">Submitted To</label>
                                <text-input v-model="filterForm.to" id="to" name="to" type="date" model-value=""/>
                            </v-col>

                            <v-col cols="12" sm="2">
                                <primary-button class="mt-5">Filter</primary-button>
                            </v-col>

                        </v-row>
                    </form>

                    <v-list>
                        <v-list-item :href="route('records.show',record.id)" variant="outlined"
                                     v-for="record in records.data" :key="record.id">
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
                                Submitted At: {{ formatDateTime(record.created_at) }}
                            </v-list-item-subtitle>
                            <template v-slot:append>
                                From: {{record.account.name}} &nbsp;/&nbsp;
                                {{ record.files.length }} Files &nbsp;/&nbsp;
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
import {Head, useForm} from "@inertiajs/vue3";
import StatusChip from "@/Components/statusChip.vue";
import {formatDateTime} from "@/utility.js";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

export default {
    name: "Index",
    methods: {formatDateTime},
    components: {PrimaryButton, TextInput, StatusChip, Head, AuthenticatedLayout},
    props: {
        records: {
            type: Object
        },
        clients:{
            type:Array
        }
    },
    data() {
        return {
            filterForm: useForm({
                client: null,
                status: null,
                from: null,
                to: null
            })
        }
    }
}
</script>

<style scoped>

</style>
