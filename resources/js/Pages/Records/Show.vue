<template>
    <authenticated-layout>
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
                                <v-btn color="#1C315A" @click="showAccount=false; print()">{{locale().trans.print}}
                                    <v-icon color="#1C315A">mdi-printer</v-icon>
                                </v-btn>
                                <v-btn color="#1C315A">{{locale().trans.reviews}}</v-btn>
                                <v-menu>

                                    <template v-slot:activator="{props}">
                                        <v-btn color="#1C315A" v-bind="props">{{locale().trans.more}}
                                            <v-icon>mdi-chevron-down</v-icon>
                                        </v-btn>
                                    </template>

                                    <v-list class="rounded-lg">
                                        <v-list-item @click="showUpdateForm=true" class="border-b">
                                            <v-list-item-title>
                                                {{locale().trans.edit_info}}
                                            </v-list-item-title>
                                        </v-list-item>
                                        <v-list-item @click="confirmingRecordDeletion=true">
                                            <v-list-item-title class="text-red">
                                                {{locale().trans.delete}}
                                            </v-list-item-title>
                                        </v-list-item>

                                    </v-list>
                                </v-menu>
                            </v-toolbar-items>
                        </v-toolbar>
                        <v-list>
                            <v-list-subheader>{{locale().trans.details}}</v-list-subheader>
                            <v-list-item>
                                <v-list-item-title class="text-h4">
                                    {{ record.title }}
                                </v-list-item-title>
                                <v-list-item-subtitle>{{locale().trans.title}}</v-list-item-subtitle>
                            </v-list-item>

                            <v-list-item>
                                <p class="text-wrap">
                                    {{ record.description }}
                                </p>
                                <v-list-item-subtitle>{{locale().trans.description}}</v-list-item-subtitle>
                            </v-list-item>

                            <v-list-item>
                                <p class="text-wrap">
                                    {{formatDateTime(record.created_at) }}
                                </p>
                                <v-list-item-subtitle>{{locale().trans.uploaded_at}}</v-list-item-subtitle>
                            </v-list-item>


                        </v-list>

                        <v-list rounded v-if="record.files.length>0">
                            <v-list-subheader>{{locale().trans.documents}}</v-list-subheader>
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
                                    <v-menu>
                                        <template v-slot:activator="{props}">
                                            <v-btn class="d-print-none"
                                                   color="grey"
                                                   size="small"
                                                   variant="outlined"
                                                   icon v-bind="props">
                                                <v-icon color="grey">mdi-chevron-down</v-icon>
                                            </v-btn>
                                        </template>
                                        <v-list class="rounded-lg">
                                            <v-list-item :href="route('records.downloadFile',file.id)">
                                                <v-list-item-title>
                                                    {{locale().trans.download}}
                                                </v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click="selectedFile=file; confirmingDeletion=true">
                                                <v-list-item-title class="text-red">{{locale().trans.delete}}</v-list-item-title>
                                            </v-list-item>
                                        </v-list>
                                    </v-menu>
                                </template>
                            </v-list-item>
                        </v-list>

                        <v-alert v-else class="mt-3"
                                 style="border: 2px dashed grey">
                            <h4 class="text-center">{{locale().trans.we_delete_files}}</h4>
                        </v-alert>
                        <form @submit.prevent="addFilesForm.post(route('file.add',record.id))">
                            <v-file-upload
                                density="compact"
                                class="mt-5 d-print-none"
                                :title="locale().trans.upload_files_placeholder"
                                v-model="addFilesForm.documents"
                                multiple
                                filter-by-type="image/png, image/jpeg, , .pdf, .doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            ></v-file-upload>

                            <div class="flex items-center gap-4 mt-5" v-if="addFilesForm.documents.length">
                                <danger-button @click="addFilesForm.documents=[]">{{locale().trans.clear}}</danger-button>
                                <PrimaryButton :disabled="addFilesForm.processing">{{locale().trans.add_files}}</PrimaryButton>

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >
                                    <p
                                        v-if="addFilesForm.recentlySuccessful"
                                        class="text-sm text-gray-600"
                                    >
                                        {{locale().trans.saved}}
                                    </p>
                                </Transition>
                            </div>

                        </form>

                        <v-expansion-panels mandatory rounded="lg" class="mt-5 border"
                                            variant="accordion" elevation="0">
                            <v-expansion-panel
                                color="#1C315A"
                                focusable
                            >
                                <v-expansion-panel-title class="d-print-none">
                                    <v-icon>mdi-badge-account-horizontal-outline</v-icon>
                                    {{locale().trans.your_information}}
                                </v-expansion-panel-title>
                                <v-expansion-panel-text>
                                    <show-infor :accountInfo="record.bio_info"></show-infor>
                                </v-expansion-panel-text>
                            </v-expansion-panel>
                        </v-expansion-panels>

                    </div>
                </div>
            </div>
        </div>


        <Modal :show="confirmingRecordDeletion" @close="closeModal">
            <div class="p-6">
                <h2
                    class="text-lg font-medium text-gray-900"
                >
                    {{locale().trans.confirm_delete}}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{locale().trans.submission_delete_text}}
                </p>
                <p class="text-red">{{locale().trans.we_delete_files}}</p>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal">
                        {{locale().trans.cancel}}
                    </SecondaryButton>

                    <Link
                        class="ms-3 text-red"
                        :href="route('record.delete',record.id)"
                        method="delete"
                        @click="closeModal"
                    >
                        {{locale().trans.delete}}
                    </Link>
                </div>
            </div>
        </Modal>


        <Modal :show="confirmingDeletion" @close="closeModal">
            <div class="p-6">
                <h2
                    class="text-lg font-medium text-gray-900"
                >
                    {{locale().trans.confirm_delete}}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{locale().trans.file_delete_text}}
                </p>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal">
                        {{locale().trans.cancel}}
                    </SecondaryButton>

                    <Link
                        v-if="selectedFile"
                        class="ms-3 text-red"
                        :href="route('file.delete',selectedFile.id)"
                        method="delete"
                        @click="closeModal"
                    >
                        {{locale().trans.delete}}
                    </Link>
                </div>
            </div>
        </Modal>

        <Modal :show="showUpdateForm" @close="closeModal">
            <div class="p-6">
                <h2
                    class="text-lg font-medium text-gray-900"
                >
                    {{locale().trans.update_submission}}
                </h2>

                <form
                    @submit.prevent="updateRecord.post(route('records.update',record.id))"
                >
                    <div class="mt-3">
                        <InputLabel for="record-name" :value="locale().trans.title"/>
                        <TextInput
                            id="record-name"
                            type="text"
                            class=" block w-full"
                            v-model="updateRecord.title"
                            required
                            autocomplete="title"
                        />

                        <InputError class="mt-2" :message="updateRecord.errors.title"/>
                    </div>

                    <div class="mt-3">
                        <InputLabel for="record-description" :value="locale().trans.description"/>
                        <v-textarea
                        variant="outlined"
                        rows="2"
                        auto-grow
                        v-model="updateRecord.description"
                        color="indigo"
                        autocomplete="title"
                        id="record-description"
                        ></v-textarea>


                        <InputError class="mt-2" :message="updateRecord.errors.title"/>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <SecondaryButton @click="closeModal">
                            {{locale().trans.cancel}}
                        </SecondaryButton>

                        <primary-button class="ml-3"> {{locale().trans.save_changes}}</primary-button>
                    </div>
                </form>

            </div>
        </Modal>

        <v-snackbar color="green" v-model="updateRecord.recentlySuccessful"> {{locale().trans.changes_saved}}</v-snackbar>

    </authenticated-layout>
</template>
<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Modal from "@/Components/Modal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {Link, useForm} from "@inertiajs/vue3";
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
        TextInput,
        InputError,
        InputLabel,
        StatusChip, ShowInfor, DangerButton, PrimaryButton, Link, SecondaryButton, Modal, AuthenticatedLayout},
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
            showUpdateForm:false,

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
            this.showUpdateForm=false;
        }
    }
}
</script>

<style scoped>

</style>
