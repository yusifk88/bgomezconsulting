<template>

    <v-row dense>
        <v-col cols="12">

            <h2 class="text-lg font-medium text-gray-900 mt-4">
                {{locale().trans.manage_dependants}}
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
                            <InputLabel for="dep-dob" :value="locale().trans.dob"/>
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
                            <InputLabel for="dep-ssn" :value="locale().trans.dob"/>
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
                            <InputLabel for="dep-months_in_home" :value="locale().trans.months_in_home"/>
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
                        <primary-button class="mt-6" block>{{locale().trans.add}}</primary-button>
                    </v-col>

                </v-row>

            </form>

            <h4 v-if="$page.props.auth.user.account.dependants.length>0" class="mt-5 font-weight-black">{{locale().trans.current_dependants}}</h4>

            <v-table v-if="$page.props.auth.user.account.dependants.length>0">
                <thead>
                <tr>
                    <th>{{ locale().trans.name }}</th>
                    <th>{{locale().trans.dob}}</th>
                    <th>{{locale().trans.ssn}}</th>
                    <th>{{locale().trans.months_in_home}}</th>
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
                        {{ item.months_in_home }} {{  locale().trans.months }}
                    </td>
                    <td>
                        <danger-button @click="selectedDependant=item;confirmingDeletion=true ">{{locale().trans.delete}}</danger-button>
                    </td>

                </tr>
                </tbody>
            </v-table>

            <v-alert v-if="$page.props.auth.user.account.dependants.length==0" class="mt-3"
                     style="border: 2px dashed grey">
                <h4 class="text-center">{{locale().trans.no_dependants_yet}}</h4>
            </v-alert>

        </v-col>
    </v-row>

    <Modal :show="confirmingDeletion" @close="closeModal">
        <div class="p-6">
            <h2
                class="text-lg font-medium text-gray-900"
            >
               {{locale().trans.confirm_delete}}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{locale().trans.want_to_delete_dependants}}?
            </p>
            <div class="mt-6 flex justify-end">
                <SecondaryButton @click="closeModal">
                    {{locale().trans.cancel}}
                </SecondaryButton>

                <Link
                    class="ms-3 text-red"
                    :href="route('dependant.destroy',selectedDependant.id)"
                    method="delete"
                    @click="closeModal"
                >
                   {{locale().trans.delete}}
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
