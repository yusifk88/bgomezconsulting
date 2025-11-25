<template>


    <div :class="{'py-12':onboard}">

            <div
                class="overflow-hidden bg-white sm:rounded-lg p-4 shadow sm:p-8"
            >
                <v-row dense>
                    <v-col cols="12" sm="6" :class="{'mx-auto':onboard}">
                       <aos-vue animation="fade-up">

                        <h1 class="text-h4 font-weight-black mt-5 text-center" v-if="onboard">Hello {{$page.props.auth.user.name}}</h1>
                        <p class="text-center text-h5 mt-2" v-if="onboard">Complete your profile to continue</p>
                        <p class="text-center mt-2" v-if="onboard">Set up your profile to make it easier to understand your tax needs, this
                            include information about you and household.</p>
                           <h2 v-if="!onboard" class="text-lg font-medium text-gray-900 mt-4">
                               Update Bio & household information
                           </h2>
                       </aos-vue>


                                <form @submit.prevent="account.post(route('account.store'))">

                                    <div>
                                        <InputLabel for="name" value="Name"/>
                                        <TextInput
                                            id="name"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="account.name"
                                            required
                                            :autofocus="onboard"
                                            autocomplete="name"
                                        />

                                        <InputError class="mt-2" :message="account.errors.name"/>
                                    </div>

                                    <div class="mt-3">
                                        <InputLabel for="occupation" value="Occupation"/>
                                        <TextInput
                                            id="occupation"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="account.occupation"
                                            required

                                            autocomplete="occupation"
                                        />

                                        <InputError class="mt-2" :message="account.errors.occupation"/>
                                    </div>

                                    <div class="mt-3">
                                        <InputLabel for="dob" value="Date Of Birth"/>
                                        <TextInput
                                            id="dob"
                                            type="date"
                                            class="mt-1 block w-full"
                                            v-model="account.dob"
                                            required

                                            autocomplete="dob"
                                        />

                                        <InputError class="mt-2" :message="account.errors.dob"/>
                                    </div>


                                    <div class="mt-3">
                                        <InputLabel for="phone" value="Phone Number"/>
                                        <TextInput
                                            id="phone"
                                            type="tel"
                                            class="mt-1 block w-full"
                                            v-model="account.phone"
                                            required
                                            autocomplete="phone"
                                        />

                                        <InputError class="mt-2" :message="account.errors.phone"/>
                                    </div>

                                    <div class="mt-3">
                                        <InputLabel for="address" value="Address"/>
                                        <TextInput
                                            id="address"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="account.address"
                                            required

                                            autocomplete="address"
                                        />

                                        <InputError class="mt-2" :message="account.errors.address"/>
                                    </div>


                                    <div class="mt-3">
                                        <InputLabel for="state" value="State"/>
                                        <v-autocomplete
                                            density="compact"
                                            id="state"
                                            variant="outlined"
                                            :items="states"
                                            color="blue"
                                            item-color="blue"
                                            v-model="account.state"
                                        ></v-autocomplete>

                                        <InputError class="mt-2" :message="account.errors.state"/>
                                    </div>

                                    <div>
                                        <v-row dense>
                                            <v-col cols="12" sm="5">


                                        <InputLabel for="city" value="City"/>
                                        <TextInput
                                            id="city"
                                            type="text"
                                            class="mt-1 w-full"
                                            v-model="account.city"
                                            required

                                            autocomplete="city"
                                        />

                                        <InputError class="mt-2" :message="account.errors.city"/>
                                            </v-col>
                                            <v-col cols="12" sm="5">
                                                <InputLabel for="street" value="Street"/>
                                                <TextInput
                                                    id="street"
                                                    type="text"
                                                    class="mt-1 w-full"
                                                    v-model="account.street"
                                                    required
                                                    autocomplete="street"
                                                />

                                                <InputError class="mt-2" :message="account.errors.street"/>
                                            </v-col>
                                            <v-col cols="12" sm="2">
                                                <InputLabel for="zip" value="Zip"/>
                                                <TextInput
                                                    id="zip"
                                                    type="text"
                                                    class="mt-1 w-full"
                                                    v-model="account.zip"
                                                    required
                                                    autocomplete="zip"
                                                />

                                                <InputError class="mt-2" :message="account.errors.zip"/>
                                            </v-col>
                                        </v-row>
                                    </div>

                                    <div class="mt-3">
                                        <InputLabel for="email" value="Email"/>
                                        <TextInput
                                            id="email"
                                            type="email"
                                            class="mt-1 block w-full"
                                            v-model="account.email"
                                            required
                                            autocomplete="email"
                                        />

                                        <InputError class="mt-2" :message="account.errors.email"/>
                                    </div>

                                    <div class="mt-3">
                                        <InputLabel for="ssn" value="Social Security Number"/>
                                        <TextInput
                                            id="ssn"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="account.ssn"
                                            required
                                            autocomplete="ssn"
                                        />

                                        <InputError class="mt-2" :message="account.errors.ssn"/>
                                    </div>

                                    <div class="mt-3">
                                        <InputLabel for="license_number" value="License Number"/>
                                        <TextInput
                                            id="license_number"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="account.license_number"
                                            required
                                            autocomplete="license number"
                                        />

                                        <InputError class="mt-2" :message="account.errors.license_number"/>
                                    </div>

                                    <div class="flex items-center gap-4 mt-5">
                                        <PrimaryButton :disabled="account.processing">Save</PrimaryButton>

                                        <Transition
                                            enter-active-class="transition ease-in-out"
                                            enter-from-class="opacity-0"
                                            leave-active-class="transition ease-in-out"
                                            leave-to-class="opacity-0"
                                        >
                                            <p
                                                v-if="account.recentlySuccessful"
                                                class="text-sm text-gray-600"
                                            >
                                                Saved.
                                            </p>
                                        </Transition>
                                    </div>

                                </form>



                    </v-col>
                </v-row>


            </div>

    </div>

</template>

<script>
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import {useForm} from "@inertiajs/vue3";
import Dropdown from "@/Components/Dropdown.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

export default {
    name: "AddAccount",
    components: {PrimaryButton, Dropdown, InputError, InputLabel, TextInput},
    props:{
      onboard:{
          type:Boolean,
          default:false
      }
    },
    data() {
        return {
            step: 1,
            account: useForm(
                {
                    name: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.name : this.$page.props.auth.user.name,
                    occupation: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.occupation : "",
                    dob: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.dob : "",
                    address: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.address : "",
                    phone: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.phone : "",
                    state: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.state : "",
                    city: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.city : "",
                    street: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.street : "",
                    zip: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.zip : "",
                    email: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.email : this.$page.props.auth.user.email,
                    ssn: this.$page.props.auth.user.account ? this.$page.props.auth.user.account.ssn : "",
                    license_number: this.$page.props.auth.user.account ?  this.$page.props.auth.user.account.license_number : ""

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
