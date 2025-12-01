<template>
    <v-row dense>
        <v-col cols="12" sm="6">

            <h2  class="text-lg font-medium text-gray-900 mt-4">
                {{locale().trans.update_spouse_information}}
            </h2>


            <form @submit.prevent="spouse.post(route('account.storeSpouse'))">

                <div>
                    <InputLabel for="spouse-name" :value="locale().trans.name"/>
                    <TextInput
                        id="spouse-name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="spouse.name"
                        required
                        autocomplete="name"
                    />

                    <InputError class="mt-2" :message="spouse.errors.name"/>
                </div>

                <div class="mt-3">
                    <InputLabel for="spouse-occupation" :value="locale().trans.occupation"/>
                    <TextInput
                        id="spouse-occupation"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="spouse.occupation"
                        required

                        autocomplete="occupation"
                    />

                    <InputError class="mt-2" :message="spouse.errors.occupation"/>
                </div>

                <div class="mt-3">
                    <InputLabel for="spouse-dob" :value="locale().trans.dob"/>
                    <TextInput
                        id="spouse-dob"
                        type="date"
                        class="mt-1 block w-full"
                        v-model="spouse.dob"
                        required

                        autocomplete="dob"
                    />

                    <InputError class="mt-2" :message="spouse.errors.dob"/>
                </div>


                <div class="mt-3">
                    <InputLabel for="spouse-phone" :value="locale().trans.phone"/>
                    <TextInput
                        id="spouse-phone"
                        type="tel"
                        class="mt-1 block w-full"
                        v-model="spouse.phone"
                        required
                        autocomplete="phone"
                    />

                    <InputError class="mt-2" :message="spouse.errors.phone"/>
                </div>

                <div class="mt-3">
                    <InputLabel for="spouse-address" :value="locale().trans.address"/>
                    <TextInput
                        id="spouse-address"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="spouse.address"
                        required

                        autocomplete="address"
                    />

                    <InputError class="mt-2" :message="spouse.errors.address"/>
                </div>


                <div class="mt-3">
                    <InputLabel for="spouse-state" :value="locale().trans.state"/>
                    <v-autocomplete
                        density="compact"
                        id="spouse-state"
                        variant="outlined"
                        :items="states"
                        color="blue"
                        item-color="blue"
                        v-model="spouse.state"
                    ></v-autocomplete>

                    <InputError class="mt-2" :message="spouse.errors.state"/>
                </div>

                <div>
                    <v-row dense>
                        <v-col cols="12" sm="5">


                            <InputLabel for="spouse-city" :value="locale().trans.city"/>
                            <TextInput
                                id="spouse-city"
                                type="text"
                                class="mt-1 w-full"
                                v-model="spouse.city"
                                required

                                autocomplete="city"
                            />

                            <InputError class="mt-2" :message="spouse.errors.city"/>
                        </v-col>
                        <v-col cols="12" sm="5">
                            <InputLabel for="spouse-street" :value="locale().trans.street"/>
                            <TextInput
                                id="spouse-street"
                                type="text"
                                class="mt-1 w-full"
                                v-model="spouse.street"
                                required
                                autocomplete="street"
                            />

                            <InputError class="mt-2" :message="spouse.errors.street"/>
                        </v-col>
                        <v-col cols="12" sm="2">
                            <InputLabel for="spouse-zip" :value="locale().trans.zip"/>
                            <TextInput
                                id="spouse-zip"
                                type="text"
                                class="mt-1 w-full"
                                v-model="spouse.zip"
                                required
                                autocomplete="zip"
                            />

                            <InputError class="mt-2" :message="spouse.errors.zip"/>
                        </v-col>
                    </v-row>
                </div>

                <div class="mt-3">
                    <InputLabel for="spouse-email" :value="locale().trans.email"/>
                    <TextInput
                        id="spouse-email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="spouse.email"
                        required
                        autocomplete="email"
                    />

                    <InputError class="mt-2" :message="spouse.errors.email"/>
                </div>

                <div class="mt-3">
                    <InputLabel for="spouse-ssn" :value="locale().trans.ssn"/>
                    <TextInput
                        id="spouse-ssn"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="spouse.ssn"
                        required
                        autocomplete="ssn"
                    />

                    <InputError class="mt-2" :message="spouse.errors.ssn"/>
                </div>

                <div class="mt-3">
                    <InputLabel for="spouse-license_number" :value="locale().trans.license_number"/>
                    <TextInput
                        id="spouse-license_number"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="spouse.license_number"
                        required
                        autocomplete="license number"
                    />

                    <InputError class="mt-2" :message="spouse.errors.license_number"/>
                </div>

                <div class="flex items-center gap-4 mt-5">
                    <PrimaryButton :disabled="spouse.processing">{{locale().trans.save}}</PrimaryButton>

                    <Transition
                        enter-active-class="transition ease-in-out"
                        enter-from-class="opacity-0"
                        leave-active-class="transition ease-in-out"
                        leave-to-class="opacity-0"
                    >
                        <p
                            v-if="spouse.recentlySuccessful"
                            class="text-sm text-gray-600"
                        >
                            {{locale().trans.saved}}.
                        </p>
                    </Transition>
                </div>

            </form>



        </v-col>
    </v-row>


</template>

<script>
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {useForm} from "@inertiajs/vue3";
import {locale} from "@/utility.js";

export default {
    name: "AddSpouse",
    methods: {locale},
    components: {InputLabel, TextInput, PrimaryButton, InputError},
    data(){
        return{

            spouse: useForm(
                {
                    name: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.name : "",
                    occupation: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.occupation : "",
                    dob: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.dob : "",
                    address: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.address : "",
                    phone: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.phone : "",
                    state: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.state : "Florida",
                    city: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.city : "",
                    street: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.street : "",
                    zip: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.zip : "",
                    email: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.email : "",
                    ssn: this.$page.props.auth.user.account?.spouse ? this.$page.props.auth.user.account.spouse.ssn : "",
                    license_number: this.$page.props.auth.user.account?.spouse ?  this.$page.props.auth.user.account.spouse.license_number : ""

                }
            ),
            states:[
                "Alabama",
                "Alaska",
                "Arizona",
                "Arkansas",
                "California",
                "Colorado",
                "Connecticut",
                "Delaware",
                "Florida",
                "Georgia",
                "Hawaii",
                "Idaho",
                "Illinois",
                "Indiana",
                "Iowa",
                "Kansas",
                "Kentucky",
                "Louisiana",
                "Maine",
                "Maryland",
                "Massachusetts",
                "Michigan",
                "Minnesota",
                "Mississippi",
                "Missouri",
                "Montana",
                "Nebraska",
                "Nevada",
                "New Hampshire",
                "New Jersey",
                "New Mexico",
                "New York",
                "North Carolina",
                "North Dakota",
                "Ohio",
                "Oklahoma",
                "Oregon",
                "Pennsylvania",
                "Rhode Island",
                "South Carolina",
                "South Dakota",
                "Tennessee",
                "Texas",
                "Utah",
                "Vermont",
                "Virginia",
                "Washington",
                "West Virginia",
                "Wisconsin",
                "Wyoming"
            ]
        }
    }
}
</script>

<style scoped>

</style>
