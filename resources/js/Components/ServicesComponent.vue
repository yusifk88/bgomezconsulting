<template>
<v-sheet class="pa-14 bg-cyan-lighten-5">

    <h1 class="text-center text-h3 text-primary" >Accounting & tax consulting <br>for you & your business</h1>
    <p class="text-center mt-3">
        Whether you are an individual, a business or a family,<br> we offer different tiers of services that you can choose from
    </p>

    <v-row dense class="mt-8">
        <v-col cols="12" sm="9" class="mx-auto">
            <v-row dense>
                <v-col cols="12" sm="4">
                    <v-card variant="flat" rounded="xl" style="border-top:10px solid cyan;border-left:10px solid cyan;">
                        <v-card-text>
                            <p class="font-weight-black text-h5">Business & Personal Tax Preparation</p>
                            <v-list class="pl-0 ml-0 mt-4">

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Initial Consultation & Assessment</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Understand client’s financial situation and tax goals,
                                        Review prior-year tax returns,
                                        Identify filing status and required tax forms,
                                        Determine applicable deadlines
                                    </p>
                                </v-list-item>

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Data Verification & Organization</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Categorize personal and business expenses,
                                        Reconcile income and expenses,
                                        Verify accuracy of financial statements,
                                        Organize documents into IRS-ready format,
                                        Identify missing information
                                    </p>
                                </v-list-item>

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Tax Calculation & Optimization</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Calculate total tax liability,
                                        Maximize refunds where possible,
                                        Run tax scenarios (e.g., filing jointly vs separately),
                                        Evaluate business tax strategies for savings,
                                        Estimate quarterly taxes for businesses or self-employed clients
                                    </p>
                                </v-list-item>


                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Client Review & Approval</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Provide a complete tax summary,
                                        Explain deductions, credits, and final numbers,
                                        Make corrections or adjustments as needed,
                                        Obtain client authorization for e-filing
                                    </p>
                                </v-list-item>



                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Filing & Submission</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        E-file federal and state tax returns,
                                        File business tax returns and associated schedules,
                                        Submit required attachments and forms,
                                        Provide confirmation of accepted returns
                                    </p>
                                </v-list-item>


                            </v-list>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn variant="outlined" color="cyan" class="text-white" block>Get Started</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
                <v-col cols="12" sm="4">
                    <v-card variant="flat" rounded="xl" style="border-top:10px solid cyan;border-left:10px solid cyan;">
                        <v-card-text>
                            <p class="font-weight-black text-h5">Accounting Bookkeeping & Payroll</p>
                            <v-list class="pl-0 ml-0 mt-4">

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Initial Setup & Assessment</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Understand the client’s business structure and financial workflow,
                                        Review existing accounting systems,
                                        Set up or update accounting software (QuickBooks, Xero, Wave, etc.),
                                        Configure chart of accounts tailored to the business,
                                    </p>
                                </v-list-item>

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Ongoing Bookkeeping Tasks</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Record income and expense transactions,
                                        Categorize all business expenses,
                                        Match and reconcile bank transactions,
                                        Manage receipts and digital records
                                    </p>
                                </v-list-item>

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Financial Reporting</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Prepare monthly financial statements,
                                        Create custom reports (sales by product, expense breakdown, etc.),
                                        Identify trends and financial risks
                                    </p>
                                </v-list-item>


                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Expense & Income Management</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Track business expenses in detail,
                                        Identify deductible expenses for tax purposes,
                                        Manage vendor billing and payments,
                                        Create and send customer invoices,
                                        Track invoice aging and follow-up on overdue payments
                                    </p>
                                </v-list-item>



                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Payroll Processing</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Set up employees (W-4 forms, salary, hourly rates, tax info),
                                        Calculate weekly/bi-weekly/monthly payroll,
                                        Track employee hours and overtime,
                                        Calculate taxes, deductions, and benefits,
                                        Generate and send pay stubs
                                    </p>
                                </v-list-item>


                            </v-list>
                        </v-card-text>

                        <v-card-actions>
                            <v-btn variant="flat" color="cyan" block>Contact Us</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
                <v-col cols="12" sm="4">
                    <v-card variant="flat" rounded="xl" style="border-top:10px solid cyan;border-left:10px solid cyan;">
                        <v-card-text>
                            <p class="font-weight-black text-h5">ITIN Application, Notary Services</p>
                            <v-list class="pl-0 ml-0 mt-4">

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Initial Consultation</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Determine if the client is eligible for an ITIN,
                                        Review client’s tax filing situation,
                                        Identify required IRS forms and supporting documents,
                                        Explain the application process and timeline
                                    </p>
                                </v-list-item>

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Document Collection & Verification</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Collect required identity documents (passport, national ID, etc.),
                                        Verify authenticity of documents per IRS standards,
                                        Collect tax return or exception documentation (if applicable),
                                        Review client-provided paperwork for accuracy and completeness
                                    </p>
                                </v-list-item>

                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Form Preparation</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Complete IRS Form W-7 (Application for ITIN),
                                        Prepare attachments and supporting statements,
                                        Ensure all information matches identification documents,
                                        Prepare accompanying federal tax return (when needed)
                                    </p>
                                </v-list-item>


                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Compliance Review</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Check all documents for IRS acceptance requirements
                                        Verify identity categories and reason for applying
                                        Ensure compliance with current IRS ITIN guidelines
                                        Identify any missing or incorrect details to avoid rejection
                                    </p>
                                </v-list-item>



                                <v-list-item>
                                    <template v-slot:prepend>
                                        <v-icon>mdi-check</v-icon>
                                    </template>
                                    <v-list-item-title class="text-primary font-weight-black">Submission Processing</v-list-item-title>
                                    <p class="text-wrap" style="text-wrap: wrap!important;">
                                        Package the ITIN application and tax return,
                                        Submit application through the appropriate method,
                                        Track application status
                                    </p>
                                </v-list-item>


                            </v-list>
                        </v-card-text>

                        <v-card-actions>
                            <v-btn variant="flat" color="cyan" class="text-white" block>Contact Us</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </v-col>
    </v-row>

</v-sheet>
</template>

<script>
export default {
    name: "ServicesComponent"
}
</script>

<style scoped>

.text-primary{
    color: #1C315A!important;
}
</style>
