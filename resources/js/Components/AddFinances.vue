<template>

    <v-row dense>

        <v-col cols="12">
            <h2 class="text-lg font-medium text-gray-900 mt-4">
                Manage Your Earnings & Deductions
            </h2>
        </v-col>
    </v-row>
    <form
        @submit.prevent="finance.post(route('account.storeFinance'))"
    >
        <v-row dense class="mt-5">
            <v-col cols="12">
                <h4 class="mt-3 font-weight-black">Current Earnings & Deductions</h4>
            </v-col>
            <v-col cols="12" sm="3">
                <div>
                    <InputLabel for="fin-type" value="Type"/>

                    <v-select
                        density="compact"
                        variant="outlined"
                        :items="['income','expense']"
                        id="fin-type"
                        v-model="finance.type"
                        color="blue"
                    ></v-select>
                    <InputError class="mt-2" :message="finance.errors.type"/>
                </div>
            </v-col>
            <v-col cols="12" sm="5">
                <div>

                    <InputLabel for="fin-name" :value="locale().trans.name"/>
                    <v-combobox
                        variant="outlined"
                        v-model="finance.name"
                        id="fin-name"
                        density="compact"
                        :items="names"
                        hint="If your option is not available type your option in and save"
                        persistent-hint
                    ></v-combobox>

                    <InputError class="mt-2" :message="finance.errors.name"/>

                </div>
            </v-col>


            <v-col cols="12" sm="2">
                <div>
                    <InputLabel for="fin-amount" :value="finance.type==='income' ? 'Quantity' : 'Amount(USD)'"/>
                    <TextInput
                        id="fin-amount"
                        type="number"
                        class=" block w-full"
                        v-model="finance.amount"
                        required
                        autocomplete="amount"
                    />

                    <InputError class="mt-2" :message="finance.errors.amount"/>
                </div>
            </v-col>

            <v-col cols="12" sm="2">
                <primary-button class="mt-6" block>Add</primary-button>
            </v-col>
        </v-row>

    </form>
    <v-row dense v-if="$page.props.auth.user.account.financials.length>0">
        <v-col cols="12" sm="12" v-if="incomes.length>0">
            <h2 class="font-weight-black text-h6 bg-grey-lighten-5">Income:</h2>
            <v-table class="w-100">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>--</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in incomes" :key="item.id">
                    <td>
                        {{item.name}}
                    </td>
                    <td>
                        {{item.amount}}
                    </td>
                    <td>
                        <danger-button  @click="selectedRecord=item; confirmingDeletion=true">Delete</danger-button>
                    </td>

                </tr>
                </tbody>
            </v-table>
        </v-col>

          <v-col cols="12" sm="12" v-if="expenses.length>0">
            <h2 class="font-weight-black text-h6 bg-grey-lighten-5">Deductions:</h2>
            <v-table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>--</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in expenses" :key="item.id">
                    <td>
                        {{item.name}}
                    </td>
                    <td>
                        ${{item.amount}}
                    </td>
                    <td>
                        <danger-button @click="selectedRecord=item; confirmingDeletion=true">Delete</danger-button>
                    </td>

                </tr>
                </tbody>
            </v-table>
        </v-col>


    </v-row>

    <v-alert v-else class="mt-3"
             style="border: 2px dashed grey">
        <h4 class="text-center">You have not added your finance records yet</h4>
    </v-alert>

    <Modal :show="confirmingDeletion" @close="closeModal">
        <div class="p-6">
            <h2
                class="text-lg font-medium text-gray-900"
            >
                Confirm Delete
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Are you sure want to delete this financial record??
            </p>
            <div class="mt-6 flex justify-end">
                <SecondaryButton @click="closeModal">
                    Cancel
                </SecondaryButton>

                <Link
                    class="ms-3 text-red"
                    :href="route('finance.destroy',selectedRecord.id)"
                    method="delete"
                    @click="closeModal"
                >
                    Delete
                </Link>
            </div>
        </div>

    </Modal>

</template>

<script>
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {Link, useForm} from "@inertiajs/vue3";
import {locale} from "@/utility.js";
import DangerButton from "@/Components/DangerButton.vue";
import Modal from "@/Components/Modal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

export default {
    name: "AddFinances",
    methods: {locale,
        closeModal() {
            this.confirmingDeletion=false;

        }},
    components: {Link, SecondaryButton, Modal, DangerButton, InputLabel, TextInput, PrimaryButton, InputError},
    data() {
        return {
            finance: useForm({
                name: "",
                amount: 0,
                type: "income"
            }),
            expenseNames: ["Medial Expenses","Real Estate Taxes","Personal Property","Mortgage interest","Job Expenses","State and Local Income Tax","General Sale Tax","Legal Expenses"],
            incomeNames: ["w-2","1099-INT","1099-DIV","SSA-1099","1099-MSC","W-2G","1099-R","1099-B"],

            confirmingDeletion:false,
            selectedRecord:null
        }
    },
    computed: {
        names(){
            return this.finance.type=='income'? this.incomeNames : this.expenseNames;
        },
        incomes() {

            return this.$page.props.auth.user.account.financials.filter(item => item.type.toLowerCase() === 'income');
        },
        expenses() {

            return this.$page.props.auth.user.account.financials.filter(item => item.type.toLowerCase() === 'expense');
        }

    }
}
</script>

<style scoped>

</style>
