<template>

    <v-row dense>

        <v-col cols="12">
            <h2 id="spouse-data" class="text-lg font-medium text-gray-900 mt-4">
                Manage Your Earnings & Deductions
            </h2>
        </v-col>
    </v-row>
        <form
            @submit.prevent="finance.post(route('account.storeDependant'))"
        >
            <v-row dense class="mt-5">
                <v-col cols="12">
                    <h4 class="mt-3 font-weight-black">Current Earnings & Deductions</h4>
                </v-col>
                <v-col cols="12" sm="5">
                    <div>
                        <InputLabel for="fin-name" :value="locale().trans.name"/>
                        <TextInput
                            id="fin-name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="finance.name"
                            required
                            autocomplete="name"
                        />

                        <InputError class="mt-2" :message="finance.errors.name"/>
                    </div>
                </v-col>

                <v-col cols="12" sm="3">
                    <div>
                        <InputLabel for="fin-type" value="Type"/>

                        <v-select
                            density="compact"
                            variant="outlined"
                            :items="['income','expense']"
                            for="fin-type"
                            v-model="finance.type"
                            color="blue"
                        ></v-select>
                        <InputError class="mt-2" :message="finance.errors.name"/>
                    </div>
                </v-col>

                <v-col cols="12" sm="2">
                    <div>
                        <InputLabel for="amount-amount" value="Amount(USD)"/>
                        <TextInput
                            id="amount-amount"
                            type="number"
                            class="mt-1 block w-full"
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


</template>

<script>
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {useForm} from "@inertiajs/vue3";
import {locale} from "@/utility.js";

export default {
    name: "AddFinances",
    methods: {locale},
    components: {InputLabel, TextInput, PrimaryButton, InputError},
    data() {
        return {
            finance: useForm({
                name: "",
                amount: 0,
                type: "income"
            })
        }
    }
}
</script>

<style scoped>

</style>
