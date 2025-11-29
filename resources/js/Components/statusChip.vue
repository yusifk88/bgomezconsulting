<template>
    <v-chip variant="tonal" :color="states[label].color">
        <v-icon size="small">{{ states[label].icon }}</v-icon>
        {{ states[label].text }}
    </v-chip>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            default: "pending"
        }
    },
    name: "statusChip",
    data() {
        return {
            states: {
                pending: {
                    color: "black",
                    icon: "mdi-circle",
                    text: "Pending"
                },

                processing: {
                    color: "blue",
                    icon: "mdi-clock-outline",
                    text: "Processing"
                },
                error: {
                    color: "orange",
                    icon: "mdi-bug",
                    text: "Error"
                },
                completed: {
                    color: "green",
                    icon: "mdi-check-circle",
                    text: "Completed"
                },


            }
        }
    }
}
</script>

<style scoped>

</style>
