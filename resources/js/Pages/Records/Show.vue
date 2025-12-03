<template>
    <authenticated-layout>
        <Head :title="record.title"></Head>
        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg mt-5"
                >
                    <div class="p-6 text-gray-900">
                        <v-toolbar class="rounded-lg d-print-none">
                            <v-toolbar-title>
                                <status-chip :label="record.status"></status-chip>
                            </v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-toolbar-items>
                                <v-btn color="#1C315A" class="mr-3" @click="print">Print
                                    <v-icon color="#1C315A">mdi-printer</v-icon>
                                </v-btn>
                                <v-btn color="green" variant="flat">Send A Review</v-btn>
                            </v-toolbar-items>
                        </v-toolbar>
                        <v-list>
                            <v-list-subheader>Details</v-list-subheader>
                            <v-list-item>
                                <v-list-item-title class="text-h4">
                                    {{ record.title }}
                                </v-list-item-title>
                                <v-list-item-subtitle>Title</v-list-item-subtitle>
                            </v-list-item>

                            <v-list-item>
                                <p class="text-wrap">
                                    {{ record.description }}
                                </p>
                                <v-list-item-subtitle>Description</v-list-item-subtitle>
                            </v-list-item>

                            <v-list-item>
                                <p class="text-wrap">
                                    {{ formatDateTime(record.created_at) }}
                                </p>
                                <v-list-item-subtitle>Uploaded At</v-list-item-subtitle>
                            </v-list-item>


                        </v-list>

                        <v-list rounded >
                            <v-list-subheader>Files</v-list-subheader>
                            <v-list-item
                                :ripple="false"
                                link
                                class="border"
                                v-for="file in record.files"
                                :key="file.id">
                                <template v-slot:prepend>
                                    <v-icon>mdi-file-outline</v-icon>
                                </template>
                                <v-list-item-title>{{ file.name }}</v-list-item-title>
                                <template v-slot:append>

                                    <v-btn
                                        :href="route('records.downloadFile',file.id)"
                                        class="d-print-none"
                                        color="green"
                                        size="small"
                                        variant="text"
                                    >
                                        Download <v-icon size="small">mdi-download-outline</v-icon>
                                    </v-btn>

                                </template>
                            </v-list-item>
                        </v-list>


                        <p>Bio Information</p>
                        <show-infor :accountInfo="record.bio_info"></show-infor>


                    </div>
                </div>
            </div>
        </div>

    </authenticated-layout>
</template>
<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Modal from "@/Components/Modal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {Head, Link, useForm} from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import DangerButton from "@/Components/DangerButton.vue";
import ShowInfor from "@/Components/ShowInfor.vue";
import StatusChip from "@/Components/statusChip.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import {formatDateTime, locale} from "@/utility.js";

export default {
    name: "Show",
    components: {
        Head,
        TextInput,
        InputError,
        InputLabel,
        StatusChip, ShowInfor, DangerButton, PrimaryButton, Link, SecondaryButton, Modal, AuthenticatedLayout
    },
    props: {
        record: {
            type: Object
        }
    },
    data() {
        return {
            confirmingDeletion: false,
            confirmingRecordDeletion: false,
            selectedFile: null,
            addFilesForm: useForm({
                documents: []
            }),
            showAccount: true,
            showUpdateForm: false,

            updateRecord: useForm({
                title: this.record.title,
                description: this.record.description
            })
        }
    },
    methods: {
        formatDateTime,
        locale,
        print() {
            window.print();
        },
        closeModal() {
            this.confirmingDeletion = false;
            this.confirmingRecordDeletion = false;
            this.showUpdateForm = false;
        }
    }
}
</script>

<style scoped>

</style>
