<template>
    <v-list>
        <v-list-item
            :href="route('records.show',item.id)"
            lines="three"
            class="border rounded-lg mb-3"
            v-for="item in items"
            :key="item.id">
            <template v-slot:append>
                <p class="d-block mr-1"><status-chip :label="item.status"></status-chip></p>

                                    <span class="text-grey">
                                    {{ item.files.length }} {{locale().trans.file}}s <v-icon>mdi-chevron-right</v-icon>
                                    </span>
            </template>
            <template v-slot:prepend>
                <v-icon size="large" color="#1C315A">mdi-file-outline</v-icon>
            </template>
            <v-list-item-title style="color: #1C315A">{{ item.title }}</v-list-item-title>
            <v-list-item-subtitle>
                {{ item.description }}
            </v-list-item-subtitle>
            <v-list-item-subtitle>
                {{locale().trans.uploaded_at}}:{{ formatDateTime(item.created_at)  }} &nbsp;&nbsp; {{locale().trans.updated_at}}: {{ formatDateTime(item.updated_at)  }}
            </v-list-item-subtitle>
        </v-list-item>
    </v-list>

</template>
<script>
import StatusChip from "@/Components/statusChip.vue";
import {formatDateTime, locale} from "@/utility.js";

export default {
    name: "FilesList",
    methods: {formatDateTime, locale},
    components: {StatusChip},
    props: {
        items: {
            type: Array
        }
    }
}
</script>

<style scoped>

</style>
