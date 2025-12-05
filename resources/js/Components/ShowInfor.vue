<template>
   <v-row>
       <v-col cols="12" sm="6">


    <h1 class="font-weight-black">{{locale().trans.your_information}}</h1>
    <v-list>
        <v-list-item class="border">
            <v-list-item-title>{{ account.name }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.name}}</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.occupation }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.dccupation}}</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.address }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.address}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.city }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.city}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.phone }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.phone}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.email }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.email}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.ssn }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.ssn}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.license_number }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.license_number}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.dob }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.dob}}</v-list-item-subtitle>
        </v-list-item>

    </v-list>
       </v-col>

         <v-col cols="12" sm="6">


    <h1 class="font-weight-black">{{locale().trans.spouse_information}}</h1>
    <v-list v-if="account.spouse">
        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.name }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.name}}</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.occupation }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.occupation}}</v-list-item-subtitle>
        </v-list-item>
        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.address }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.address}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.city }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.city}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.phone }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.phone}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.email }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.email}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.ssn }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.ssn}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.license_number }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.license_number}}</v-list-item-subtitle>
        </v-list-item>

        <v-list-item class="border">
            <v-list-item-title>{{ account.spouse.dob }}</v-list-item-title>
            <v-list-item-subtitle>{{locale().trans.dob}}</v-list-item-subtitle>
        </v-list-item>

    </v-list>
             <v-alert v-else>
                 No spouse information available
             </v-alert>

       </v-col>

       <v-col cols="12">
           <h1 class="font-weight-black">{{locale().trans.dependants}}</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>{{locale().trans.name}}</th>
                   <th>{{locale().trans.dob}}</th>
                   <th>{{locale().trans.ssn}}</th>
                   <th>{{locale().trans.months_in_home}}</th>
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
           <h1 class="font-weight-black">{{locale().trans.income}}</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>{{locale().trans.type}}</th>
                   <th>{{locale().trans.quantity}}</th>

               </tr>
               </thead>
               <tbody>
               <tr v-for="item in incomes" :key="item.id">
                   <td>{{item.name}}</td>
                   <td>{{item.amount}}</td>

               </tr>
               </tbody>
           </v-table>
       </v-col>

       <v-col cols="12">
           <h1 class="font-weight-black">{{locale().trans.expense}}</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>{{locale().trans.type}}</th>
                   <th>{{locale().trans.amount}}</th>
               </tr>
               </thead>
               <tbody>
               <tr
                   v-for="item in expenses"
               >
                   <td>{{item.name}}</td>
                   <td>{{item.amount}}</td>

               </tr>
               </tbody>
           </v-table>
       </v-col>




   </v-row>
</template>

<script>
import {locale} from "@/utility.js";

export default {
    name: "ShowInfor",
    methods: {locale},
    props: {
        accountInfo: {
            type: Object
        }
    },
    computed: {
        account() {
            return JSON.parse(this.accountInfo)
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
