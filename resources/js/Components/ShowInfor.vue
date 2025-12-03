<template>
   <v-row>
       <v-col cols="12" sm="6">
           <p class="font-weight-black">Client Information</p>

           <v-list>
        <v-list-item class="border">
            <v-list-item-title>{{ account.name }}</v-list-item-title>
            <v-list-item-subtitle>Name</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.occupation }}</v-list-item-title>
            <v-list-item-subtitle>Occupation</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.address }}</v-list-item-title>
            <v-list-item-subtitle>Address</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.city }}</v-list-item-title>
            <v-list-item-subtitle>City</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.phone }}</v-list-item-title>
            <v-list-item-subtitle>Phone</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.email }}</v-list-item-title>
            <v-list-item-subtitle>Email</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.ssn }}</v-list-item-title>
            <v-list-item-subtitle>Social Security Number</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.license_number }}</v-list-item-title>
            <v-list-item-subtitle>License Number</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.dob }}</v-list-item-title>
            <v-list-item-subtitle>Date of Birth</v-list-item-subtitle>
        </v-list-item>

    </v-list>
       </v-col>

         <v-col cols="12" sm="6">


    <p class="font-weight-black">Spouse Information</p>

    <v-list v-if="account.spouse">
        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.name }}</v-list-item-title>
            <v-list-item-subtitle>Name</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.occupation }}</v-list-item-title>
            <v-list-item-subtitle>Occupation</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.address }}</v-list-item-title>
            <v-list-item-subtitle>Address</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.city }}</v-list-item-title>
            <v-list-item-subtitle>City</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.phone }}</v-list-item-title>
            <v-list-item-subtitle>Phone</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.email }}</v-list-item-title>
            <v-list-item-subtitle>Email</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.ssn }}</v-list-item-title>
            <v-list-item-subtitle>Social Security Number</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.license_number }}</v-list-item-title>
            <v-list-item-subtitle>License Number</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.dob }}</v-list-item-title>
            <v-list-item-subtitle>Date of Birth</v-list-item-subtitle>
        </v-list-item>

    </v-list>
             <v-alert v-else variant="tonal" color="warning">
                 <p class="font-weight-black">No spouse information</p>
                 <p>This client has not added a spouse to thier profile</p>
             </v-alert>
       </v-col>

       <v-col cols="12">
           <h1 class="font-weight-black">Dependants</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>Name</th>
                   <th>Date of Birth</th>
                   <th>Social Security Number</th>
                   <th>Months in Home</th>
               </tr>
               </thead>
               <tbody>
               <tr v-for="item in account.dependants" :key="item.id">
                   <td>{{item.name}}</td>
                   <td>{{item.dob}}</td>
                   <td>{{item.ssn}}</td>
                   <td>{{item.months_in_home}}Months</td>
               </tr>
               </tbody>
           </v-table>
       </v-col>

       <v-col cols="12">
           <h1 class="font-weight-black">Income</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>Type</th>
                   <th class="text-center">Quantity</th>

               </tr>
               </thead>
               <tbody>
               <tr v-for="item in incomes" :key="item.id">
                   <td>{{item.name}}</td>
                   <td class="text-center">{{item.amount}}</td>

               </tr>
               </tbody>
           </v-table>
       </v-col>

       <v-col cols="12">

           <h1 class="font-weight-black">Deductions</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>Type</th>
                   <th class="text-right">Amount</th>
               </tr>
               </thead>
               <tbody>
               <tr
                   v-for="item in expenses"
               >
                   <td>{{item.name}}</td>
                   <td class="text-right">${{item.amount}}</td>

               </tr>
               </tbody>
           </v-table>
       </v-col>

       <v-col cols="12" v-if="account.files && account.files.length>0">

           <p class="font-weight-black">Documents</p>
           <v-list>
               <v-list-item :href="route('records.show',record.id)" variant="outlined" v-for="record in account.files" :key="record.id">
                   <template v-slot:prepend>
                       <v-icon size="x-large">mdi-file-outline</v-icon>
                   </template>
                   <v-list-item-title>
                       {{ record.title }}
                   </v-list-item-title>
                   <v-list-item-subtitle>
                       {{ record.description }}
                   </v-list-item-subtitle>
                   <v-list-item-subtitle>
                       Submitted At: {{formatDateTime(record.created_at)}}
                   </v-list-item-subtitle>
                   <template v-slot:append>
                       {{record.files.length}} Files &nbsp;/&nbsp;
                       <status-chip :label="record.status"></status-chip>
                       <v-icon color="gre" size="small">mdi-chevron-right</v-icon>
                   </template>
               </v-list-item>
           </v-list>


       </v-col>


   </v-row>
</template>

<script>
import {formatDateTime, locale} from "@/utility.js";
import StatusChip from "@/Components/statusChip.vue";

export default {
    name: "ShowInfor",
    components: {StatusChip},
    methods: {formatDateTime, locale},
    props: {
        accountInfo: {
            type: Object
        }
    },
    computed: {
        account() {
            return typeof this.accountInfo =='object' ? this.accountInfo : JSON.parse(this.accountInfo)
        },
        incomes(){
            return this.account.financials.filter(item=>item.type=='income')
        } ,
        expenses(){
            return this.account.financials.filter(item=>item.type=='expense')
        }
    }
}
</script>

<style scoped>

</style>
