
<template>
<v-sheet class="pa-md-14 pa-4 bg-cyan-accent-1">
    <aos-vue animation="fade-up">

    <p class="text-center text-h4 font-weight-black text-primary" v-html="locale().trans.record_call_out"></p>
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
                    class="ma-2 rounded-xl fill-height"
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
import {locale} from "@/utility.js";

export default {
    name: "TestimonialComponent",
    methods: {locale},
    data(){
        return{
            slide:null,
            items:[
                {
                    name:"Melanie",
                    text:"Ms Berta is amazing, her personality and her professionalism are everything I was looking for." +
                        "I Will not be doing my taxes with anyone else",
                    occupation:""
                },

                {
                    name:"Daniel",
                    text:"Working with Berta and the Bgomez consulting team has been a life changing experience for me and my business, I could not recommend them enough, it takes the stress away so you can focus on what really matters, growing your business.",
                    occupation:""
                },

                {
                    name:"Michelle Deaver",
                    text:"BGomez Consulting ha sido un verdadero cambio positivo para todas mis necesidades fiscales. Su profesionalismo, atención al detalle y compromiso genuino con ayudar a los clientes a entender sus finanzas los distingue de cualquier otro servicio que haya utilizado. Hicieron que todo el proceso fuera sencillo, sin estrés y sumamente eficiente. Me sentí informada, apoyada y segura en cada paso.\n" +
                        "Si buscas un equipo confiable, experto y realmente enfocado en el cliente, recomiendo ampliamente a BGomez Consulting. Van más allá de lo esperado, ¡y te preguntarás por qué no comenzaste a trabajar con ellos antes!”",
                    occupation:""
                },
                {
                    name:"Christian Saravia",
                    text:"Their support with my taxes has been exceptional. Each year, they have provided me with accurate, efficient, and trustworthy service, always taking the time to explain everything clearly and ensure that my filings are completed correctly.\n" +
                        "\n" +
                        "Their professionalism, attention to detail, and friendly approach have made the entire tax process easy and stress-free for me. I truly appreciate their reliability and dedication, and I highly recommend BGomezConsulting to anyone looking for knowledgeable and dependable tax services.",
                    occupation:""
                }
                ,
                {
                    name:"Fatimah Alhassan",
                    text:"BGomez Consulting provided exceptional service with my tax filing in the past two years. They were professional, patient, and thorough in reviewing every detail to ensure everything was accurate and optimized for the best possible outcome. The process was smooth from start to finish, and they took the time to explain things clearly, making me feel confident and informed throughout. I truly appreciate their reliability and expertise, and I highly recommend BGomez Consulting to anyone looking for trustworthy and efficient tax assistance.",
                    occupation:""
                }
            ]
        }
    }
}
</script>

<style scoped>

</style>
