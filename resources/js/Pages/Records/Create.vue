<template>

    <authenticated-layout>
        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{locale().trans.tax_form_title}}
                        </h2>

                        <form
                            @submit.prevent="record.post(route('records.store'))"
                            class="mt-6 space-y-6"
                        >
                            <div>
                                <InputLabel for="name" :value="locale().trans.title"/>
                                <TextInput
                                    id="name"
                                    type="text"
                                    class="block w-full"
                                    v-model="record.title"
                                    required
                                    autofocus
                                    autocomplete="name"
                                    :placeholder="locale().trans.tax_form_title_placeholder"
                                />

                                <InputError class="mt-2" :message="record.errors.title"/>
                            </div>


                            <div>
                                <InputLabel for="description" :value="locale().trans.description"/>
                                <v-textarea
                                    color="indigo"
                                    v-model="record.description"
                                    auto-grow
                                    id="description"
                                    required
                                    rows="3"
                                    variant="outlined"
                                    :placeholder="locale().trans.description_placeholder"
                                ></v-textarea>

                                <InputError class="mt-2" :message="record.errors.description"/>
                            </div>


                            <div>
                                <InputLabel for="files" :value="locale().trans.upload_files"/>
                                <v-file-upload
                                id="files"
                                v-model="record.documents"
                                required
                                multiple
                                density="compact"
                                :title="locale().trans.upload_files_placeholder"
                                show-size
                                class="rounded-lg"
                                :browse-text="locale().trans.upload_files_placeholder"
                                filter-by-type="image/png, image/jpeg, , .pdf, .doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                >
                                </v-file-upload>

                                <InputError class="mt-2" :message="record.errors.documents"/>

                                <danger-button v-if="record.documents.length>0" @click="record.documents=[]">Clear Files</danger-button>

                            </div>

                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="record.processing">{{locale().trans.submit}}</PrimaryButton>

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >
                                    <p
                                        v-if="record.recentlySuccessful"
                                        class="text-sm text-gray-600"
                                    >
                                       {{locale().trans.saved}}
                                    </p>
                                </Transition>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <v-snackbar color="green" v-model="record.recentlySuccessful">{{locale().trans.documents_submitted}}</v-snackbar>
    </authenticated-layout>


</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import {useForm} from "@inertiajs/vue3";
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {locale} from "@/utility.js";

export default {
    name: "Create",
    methods: {locale},
    components: {PrimaryButton, DangerButton, InputError, InputLabel, TextInput, AuthenticatedLayout},
    data() {
        return {
            record: useForm({
                title: "",
                description: "",
                documents: []
            })
        }
    }
}
</script>

<style scoped>

</style>
