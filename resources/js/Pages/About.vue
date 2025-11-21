<template>
    <Head title="About"></Head>
    <guest-layout>
        <v-sheet style="background-color: #1C315A">
            <v-row dense no-gutters>
                <v-col cols="12" sm="6">
                    <v-sheet class="pa-md-14 pa-4 text-white bg-transparent">
                        <aos-vue animation="fade-up">
                            <h1 class="text-h3 font-weight-black mt-15">About Us</h1>
                            <p class="text-body-1 mt-3">
                                BGomez consulting is a tax and bookkeeping consulting service based in Florida, United States with the mission of helping small business
                                thrive and individuals and families to get their taxes right.
                            </p>

                            <p class="text-body-1 mt-3">
                              We are specialists in ITIN services such as IRA w-7 form application and notary; we take pride in our dedication to
                                make this process stress-free for the ordinary person in and around the state of Florida.
                                Over the past 4 years we have processed over 150 W-7 applications in the state Florida.

                            </p>

                            <p class="text-body-1 mt-3">
                              Our professional team of accountants on a mission to make sure small businesses thrive have helped bring clarity to over 50 businesses
                                by providing daily bookkeeping services, financial advisory services and financial reporting that spot trends and measure progress in their businesses.
                            </p>


                            <p class="text-body-1 mt-3">
                              Over the last 4 years we have helped individuals, families and businesses do their taxes the right way, get the right amount of refunds and stay compliant with the state.
                                This track record has create a community of over 200 happy clients in our pool which is growing rapidly month-on-month
                            </p>


                            <p class="font-weight-black text-h5 mt-3">Mission</p>
                            <p class="mt-2">We on a mission to become the go-to consultancy and resources center for tax and compliance in the United States of America</p>


                            <p class="font-weight-black text-h5 mt-3">Vision</p>
                            <p class="mt-2">To make tax feel painless and to help small businesses thrive </p>


                        </aos-vue>
                    </v-sheet>


                </v-col>

                <v-col cols="12" sm="6">
                    <aos-vue animation="fade-in">
                    <v-img src="/img/team.jpg" style="border-left: 10px solid orange">
                    </v-img>
                    </aos-vue>

                </v-col>

            </v-row>
        </v-sheet>

        <v-sheet>
            <v-row dense no-gutters>
                <v-col cols="12" sm="6">
                    <aos-vue animation="fade-in">
                        <v-img style="border-right: 10px solid #1C315A" src="/img/ceo.jpg"></v-img>
                    </aos-vue>
                </v-col>

                <v-col cols="12" sm="6">
                    <v-sheet class="pa-md-14 pa-4  bg-transparent">

                        <aos-vue animation="fade-up">

                    <h1 class="text-h4 font-weight-black mt-md-15">Meet our founder & CEO</h1>
                        <p class="mt-3 text-body-1">
                            Berta Gomez is the CEO of BGomezConsulting LLC, bringing over a decade of comprehensive experience in accounting and financial services. With a strong passion for helping small businesses thrive, Berta has consistently demonstrated her bookkeeping, tax preparation, and financial management expertise. <br>

                            Berta holds a Master’s Degree in Education and an MBA from Warner University, equipping her with a unique blend of skills that enhances her accounting prowess and strengthens her leadership abilities. Her educational background is complemented by more than five years of specialized experience as a tax preparer, where she has successfully assisted numerous clients in navigating the complexities of tax compliance and maximizing their financial outcomes. <br>

                            Under Berta’s direction, BGomezConsulting LLC has established a reputation for delivering personalized and reliable financial solutions tailored to each client’s needs. Her commitment to excellence and integrity permeates every aspect of her work, ensuring that clients receive the highest level of service.<br>

                            Outside of her professional life, Berta is passionate about sports and is an active member of a local softball team. She enjoys the game and supports the practice of sports in her community. Her dedication to athletics reflects her belief in teamwork and discipline, qualities she brings to her professional endeavors. Additionally, she actively participates in various local initiatives, demonstrating her commitment to giving back to the community. Berta’s dedication to her clients and the community illustrates her belief in fostering genuine relationships built on trust and respect. <br>

                            With Berta Gomez at the helm, BGomezConsulting LLC continues growing as a trusted partner for businesses seeking financial clarity and success.
                        </p>
                        </aos-vue>

                    </v-sheet>
                </v-col>

            </v-row>
        </v-sheet>
    </guest-layout>


</template>

<script>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

export default {
    name: "About",
    components: {GuestLayout, Head}
}
</script>

<style scoped>

</style>
