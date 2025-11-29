<template>
   <v-row>
       <v-col cols="12" sm="6">


    <h1 class="font-weight-black">Your Information</h1>
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
            <v-list-item-subtitle>Date Of Birth</v-list-item-subtitle>
        </v-list-item>

    </v-list>
       </v-col>

         <v-col cols="12" sm="6">


    <h1 class="font-weight-black">Spouse Information</h1>
    <v-list>
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
            <v-list-item-subtitle>Date Of Birth</v-list-item-subtitle>
        </v-list-item>

    </v-list>
       </v-col>

       <v-col cols="12">
           <h1 class="font-weight-black">Dependants</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>Name</th>
                   <th>Date Of Birth</th>
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
                   <th>Quantity</th>

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
           <h1 class="font-weight-black">Expense</h1>
           <v-table class="border">
               <thead>
               <tr>
                   <th>Type</th>
                   <th>Amount</th>
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
export default {
    name: "ShowInfor",
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
            return this.account.financials.filter(item=>item.type=='expenses')
        }
    }
}
</script>

<style scoped>

</style>
