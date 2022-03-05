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
                    <create-update></create-update>
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

export default {
    components: {
        CreateUpdate,
        CreateTestimonial,
        Updates,
        BreezeAuthenticatedLayout,
        Head,
    },
}
</script>
