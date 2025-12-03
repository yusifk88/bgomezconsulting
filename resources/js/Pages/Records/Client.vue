<template>
    <authenticated-layout>
        <div class="py-12">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg mt-5 pa-3"
                >
                        <show-infor :account-info="client"></show-infor>


                    <v-col cols="12"  v-if="client.files.length==0">
                        <v-alert>
                            <p class="font-weight-black">No documents</p>
                            <p>This clients has not submitted any documents</p>
                        </v-alert>
                    </v-col>

                </div>
            </div>
        </div>
    </authenticated-layout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ShowInfor from "@/Components/ShowInfor.vue";

export default {
    name: "Client",
    props: {
        client: {
            type: Object
        }
    },
    components: {ShowInfor, AuthenticatedLayout}
}
</script>

<style scoped>

</style>
