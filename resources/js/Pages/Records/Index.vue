<template>
<authenticated-layout>
    <Head title="Submissions"/>
    <div class="py-12">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <v-toolbar height="50" class="bg-transparent mt-5">
                <v-spacer></v-spacer>
                <v-toolbar-items>
                    <primary-button
                        class="mr-2"

                        :href="route('records.new')" variant="flat" color="green">Submit New
                    </primary-button>
                </v-toolbar-items>
            </v-toolbar>

            <div
                class="overflow-hidden bg-white shadow-sm sm:rounded-lg mt-5"
            >
                <div class="p-6 text-gray-900">
                    <p>{{locale().trans.submissions}}</p>

                    <files-list v-if="records.data.length>0" :items="records.data"></files-list>
                    <v-alert v-else class="mt-3 text-center"
                             style="border: 2px dashed grey">
                        <h4 class="text-center">Your submissions will show here. You have not submitted any documents yet.</h4>
                        <p>To submit your documents click on the "submit new" button</p>
                    </v-alert>
                </div>
            </div>
        </div>
    </div>
</authenticated-layout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import FilesList from "@/Components/FilesList.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {locale} from "@/utility.js";

export default {
    methods: {locale},
    components: {PrimaryButton, FilesList, Head, AuthenticatedLayout},
    props:{
      records:{
          type:Object
      }

    },
    name: "Index"
}
</script>

<style scoped>

</style>
