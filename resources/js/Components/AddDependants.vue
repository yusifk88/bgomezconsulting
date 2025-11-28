<template>

    <v-row dense>
        <v-col cols="12">

            <h2 class="text-lg font-medium text-gray-900 mt-4">
                Manage Your Dependants
            </h2>


            <form
                @submit.prevent="dependant.post(route('account.storeDependant'))"
            >
                <v-row dense class="mt-5">
                    <v-col cols="12">
                        <h4 class="mt-3 font-weight-black">Add a dependant</h4>
                    </v-col>
                    <v-col cols="12" sm="3">
                        <div>
                            <InputLabel for="dep-name" :value="locale().trans.name"/>
                            <TextInput
                                id="dep-name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="dependant.name"
                                required
                                autocomplete="name"
                            />

                            <InputError class="mt-2" :message="dependant.errors.name"/>
                        </div>
                    </v-col>

                    <v-col cols="12" sm="3">
                        <div>
                            <InputLabel for="dep-dob" value="Date of birth"/>
                            <TextInput
                                id="dep-dob"
                                type="date"
                                class="mt-1 block w-full"
                                v-model="dependant.dob"
                                required
                                autocomplete="dob"
                            />

                            <InputError class="mt-2" :message="dependant.errors.name"/>
                        </div>
                    </v-col>

                    <v-col cols="12" sm="2">
                        <div>
                            <InputLabel for="dep-ssn" value="Social Security Number"/>
                            <TextInput
                                id="dep-ssn"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="dependant.ssn"
                                required
                                autocomplete="ssn"
                            />

                            <InputError class="mt-2" :message="dependant.errors.ssn"/>
                        </div>
                    </v-col>

                    <v-col cols="12" sm="2">
                        <div>
                            <InputLabel for="dep-months_in_home" value="No of months in home"/>
                            <TextInput
                                id="dep-months_in_home"
                                type="number"
                                min="1"
                                class="mt-1 block w-full"
                                v-model="dependant.months_in_home"
                                required
                                autocomplete="months_in_home"
                            />

                            <InputError class="mt-2" :message="dependant.errors.months_in_home"/>
                        </div>
                    </v-col>
                    <v-col cols="12" sm="2">
                        <primary-button class="mt-6" block>Add</primary-button>
                    </v-col>

                </v-row>

            </form>

            <h4 v-if="$page.props.auth.user.account.dependants.length>0" class="mt-5 font-weight-black">Current Dependants</h4>

            <v-table v-if="$page.props.auth.user.account.dependants.length>0">
                <thead>
                <tr>
                    <th>{{ locale().trans.name }}</th>
                    <th>Date of Birth</th>
                    <th>Social Security Number</th>
                    <th>Number Of Months in Home</th>
                    <th>--</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in $page.props.auth.user.account.dependants" :key="item.id">

                    <td>
                        {{ item.name }}
                    </td>
                    <td>
                        {{ item.dob }}
                    </td>

                    <td>
                        {{ item.ssn }}
                    </td>

                    <td>
                        {{ item.months_in_home }} {{ item.months_in_home > 1 ? "Months" : "Month" }}
                    </td>
                    <td>
                        <danger-button @click="selectedDependant=item;confirmingDeletion=true ">Delete</danger-button>
                    </td>

                </tr>
                </tbody>
            </v-table>

            <v-alert v-if="$page.props.auth.user.account.dependants.length==0" class="mt-3"
                     style="border: 2px dashed grey">
                <h4 class="text-center">You have not added any dependants yet</h4>
            </v-alert>

        </v-col>
    </v-row>

    <Modal :show="confirmingDeletion" @close="closeModal">
        <div class="p-6">
            <h2
                class="text-lg font-medium text-gray-900"
            >
                Confirm Delete
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Are you sure want to delete this dependant?
            </p>
            <div class="mt-6 flex justify-end">
                <SecondaryButton @click="closeModal">
                    Cancel
                </SecondaryButton>

                <Link
                    class="ms-3 text-red"
                    :href="route('dependant.destroy',selectedDependant.id)"
                    method="delete"
                    @click="closeModal"
                >
                    Delete Dependant
                </Link>
            </div>
        </div>

    </Modal>
</template>

<script>
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {Link, useForm} from "@inertiajs/vue3";
import {locale} from "@/utility.js";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import DangerButton from "@/Components/DangerButton.vue";
import Modal from "@/Components/Modal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

export default {
    name: "AddDependants",
    components: {Link, SecondaryButton, Modal, DangerButton, PrimaryButton, InputLabel, TextInput, InputError},
    data() {
        return {
            confirmingDeletion: false,
            items: [],
            dependant: useForm({
                name: "",
                dob: "",
                ssn: "",
                months_in_home: ""
            }),
            selectedDependant:null
        }
    },
    methods: {
        locale,
        closeModal() {
            this.confirmingDeletion=false;

        }
    }
}
</script>

<style scoped>

</style>
