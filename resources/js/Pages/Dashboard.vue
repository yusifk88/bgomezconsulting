<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>

        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                        <v-toolbar height="40" class="bg-transparent mt-5">
                            <v-spacer></v-spacer>
                            <v-toolbar-items>
                                <primary-button :href="route('record.index')" variant="flat" color="green" class="mr-5">Submit Documents
                                </primary-button>
                                <v-menu>
                                    <template v-slot:activator="{props}">
                                        <v-btn
                                            color="#1C315A"
                                            variant="text"
                                            v-bind="props"
                                            class="mr-2"
                                        >Update your Info.
                                            <v-icon>mdi-chevron-down</v-icon>
                                        </v-btn>
                                    </template>
                                    <v-list class="rounded-lg">
                                        <v-list-item :href="route('profile.edit')+'/#account-info'">
                                            <v-list-item-title>Update Your Bio Info</v-list-item-title>
                                        </v-list-item>

                                        <v-list-item :href="route('profile.edit')+'/#spouse-info'">
                                            <v-list-item-title>Update Your Spouse Info</v-list-item-title>
                                        </v-list-item>

                                        <v-list-item :href="route('profile.edit')+'/#dependant-info'">
                                            <v-list-item-title>Update Your Dependants List</v-list-item-title>
                                        </v-list-item>

                                        <v-list-item :href="route('profile.edit')+'/#finance-info'">
                                            <v-list-item-title>Update Your Income & Expenses</v-list-item-title>
                                        </v-list-item>

                                    </v-list>
                                </v-menu>
                            </v-toolbar-items>
                        </v-toolbar>


                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg mt-5"
                >
                    <div class="p-6 text-gray-900">
                        <p>Recent Submissions</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
