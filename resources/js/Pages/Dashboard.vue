

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>

        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                        <v-toolbar height="50" class="bg-transparent mt-5">
                            <v-spacer></v-spacer>
                            <v-toolbar-items>
                                <primary-button :href="route('records.new')" variant="flat" color="green" class="mr-5">
                                    {{locale().trans.submit_documents}}
                                </primary-button>
                                <v-menu>
                                    <template v-slot:activator="{props}">
                                        <v-btn
                                            color="#1C315A"
                                            variant="text"
                                            v-bind="props"
                                            class="mr-2"
                                        >{{locale().trans.update_info}}
                                            <v-icon>mdi-chevron-down</v-icon>
                                        </v-btn>
                                    </template>
                                    <v-list class="rounded-lg">
                                        <v-list-item :href="route('profile.edit')+'/#account-info'">
                                            <v-list-item-title>{{locale().trans.update_bio}}</v-list-item-title>
                                        </v-list-item>

                                        <v-list-item :href="route('profile.edit')+'/#spouse-info'">
                                            <v-list-item-title>{{locale().trans.update_spouse}}</v-list-item-title>
                                        </v-list-item>

                                        <v-list-item :href="route('profile.edit')+'/#dependant-info'">
                                            <v-list-item-title>{{locale().trans.update_dependants}}</v-list-item-title>
                                        </v-list-item>

                                        <v-list-item :href="route('profile.edit')+'/#finance-info'">
                                            <v-list-item-title>{{locale().trans.update_finance}}</v-list-item-title>
                                        </v-list-item>

                                    </v-list>
                                </v-menu>
                            </v-toolbar-items>
                        </v-toolbar>


                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg mt-5"
                >
                    <div class="p-6 text-gray-900">
                        <p>{{locale().trans.recent}} {{locale().trans.submissions}}</p>

                        <files-list v-if="recentSubmissions.length>0" :items="recentSubmissions"></files-list>
                        <v-alert v-else class="mt-3 text-center"
                                 style="border: 2px dashed grey">
                            <h4 class="text-center">{{locale().trans.no_recent_submissions}}</h4>
                            <Link class="mx-auto text-blue" :href="route('records.new')">{{locale().trans.send_first_submission}}</Link>
                        </v-alert>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import FilesList from "@/Components/FilesList.vue";
import {locale} from "@/utility.js";
export default {
    methods: {locale},
    components: {Link, FilesList, PrimaryButton, Head, AuthenticatedLayout},
    props:{
        recentSubmissions:{
            type:Array
        }
    }
}
</script>
