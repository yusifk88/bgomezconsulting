<template>

    <authenticated-layout>
        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        <h2 class="text-lg font-medium text-gray-900">
                            Submit documents for your tax filing process
                        </h2>

                        <form
                            @submit.prevent="record.post(route('records.store'))"
                            class="mt-6 space-y-6"
                        >
                            <div>
                                <InputLabel for="name" value="Title"/>
                                <TextInput
                                    id="name"
                                    type="text"
                                    class="block w-full"
                                    v-model="record.title"
                                    required
                                    autofocus
                                    autocomplete="name"
                                    placeholder="My tax filing for 2025"
                                />

                                <InputError class="mt-2" :message="record.errors.title"/>
                            </div>


                            <div>
                                <InputLabel for="description" value="Description"/>
                                <v-textarea
                                    color="indigo"
                                    v-model="record.description"
                                    auto-grow
                                    id="description"
                                    required
                                    rows="3"
                                    variant="outlined"
                                    placeholder="Describe the documents here"
                                ></v-textarea>

                                <InputError class="mt-2" :message="record.errors.description"/>
                            </div>


                            <div>
                                <InputLabel for="files" value="Upload Files"/>
                                <v-file-upload
                                id="files"
                                v-model="record.documents"
                                required
                                multiple
                                density="compact"
                                title="Drop files here or click to add files"
                                show-size
                                class="rounded-lg"
                                browse-text="Drop files here or click to add files"
                                filter-by-type="image/png, image/jpeg, , .pdf, .doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                >
                                </v-file-upload>

                                <InputError class="mt-2" :message="record.errors.documents"/>

                                <danger-button v-if="record.documents.length>0" @click="record.documents=[]">Clear Files</danger-button>

                            </div>

                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="record.processing">Submit</PrimaryButton>

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
                                        Saved.
                                    </p>
                                </Transition>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <v-snackbar color="green" v-model="record.recentlySuccessful">Documents submitted</v-snackbar>
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

export default {
    name: "Create",
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
