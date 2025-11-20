
<template>
<v-sheet class="pa-md-14 pa-4 bg-cyan-accent-1">
    <aos-vue animation="fade-up">

    <p class="text-center text-h4 font-weight-black text-primary">Over <span style="border-bottom: 5px solid cyan">500</span> clients trust us <br v-if="!$vuetify.display.mobile"> with their bookkeeping and taxes.</p>
    <p class="text-center"><v-rating model-value="4.8" readonly size="25" color="orange"></v-rating></p>
    </aos-vue>

    <v-slide-group
        v-model="slide"
        class="pa-md-4"
        show-arrows
    >
        <v-slide-group-item
            v-for="(item, index) in items"
            :key="index"
        >
            <aos-vue animation="fade-up">
                <v-card
                    variant="flat"
                    height="auto"
                    width="300"
                    class="ma-2 rounded-xl"
                >
                    <v-card-text>
                        <v-avatar rounded="lg">
                            <v-img src="/img/avatar-placeholder.jpg"></v-img>
                        </v-avatar>
                        <strong class="d-block">
                            {{item.name}}
                        </strong>
                        <p class=" mt-3">{{item.text}}</p>
                    </v-card-text>
                </v-card>
            </aos-vue>
        </v-slide-group-item>
    </v-slide-group>

</v-sheet>

</template>

<script>
export default {
    name: "TestimonialComponent",
    data(){
        return{
            slide:null,
            items:[
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                },
                {
                    name:"Vilma Pica Piedra",
                    text:"I want to express my heartfelt gratitude to BGomezConsulting LLC for their incredible support during a very challenging time. When I discovered that my identity had been stolen and a loan was taken out in my name, I felt helpless. Fortunately, they guided me through the entire process, from filing the necessary reports to notifying the IRS. Thanks to their expertise, I was able to file my taxes without any issues and regain control of my financial life. I highly recommend their services!",
                    occupation:""
                }
            ]
        }
    }
}
</script>

<style scoped>

</style>
