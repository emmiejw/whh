<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div v-if="$page.props.bladeTemplate">
                        <component :is="$page.props.bladeTemplate.name" :data="$page.props.bladeTemplate.data"></component>
                    </div>
                    <br>
                    <hr>
                    <CreateTestimonial></CreateTestimonial>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Updates from "@/Components/Updates";
import CreateUpdate from "@/Components/CreateUpdate";
import CreateTestimonial from "@/Components/CreateTestimonial"
import CreateStaffMember from "@/Components/createStaffMember.vue";

export default {
    components: {
        CreateStaffMember,
        CreateUpdate,
        CreateTestimonial,
        Updates,
        BreezeAuthenticatedLayout,
        Head,
    },
    props: {
        bladeTemplate: Object // Define the prop to receive Blade template data
    },
}
</script>
