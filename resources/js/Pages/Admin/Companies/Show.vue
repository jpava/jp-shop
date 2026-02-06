<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps({
    company: Object
});

</script>
<template>
    <Head :title="`Company: ${company.name}`" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Company: {{ company.data.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        <p><strong>Name:</strong> {{ company.data.name }}</p>
                        <p><strong>Email:</strong> {{ company.data.email }}</p>
                        <p><strong>Address:</strong> {{ company.data.address }}</p>
                        <p><strong>Phone:</strong> {{ company.data.phone }}</p>
                        <Link
                            :href="route('admin.companies.index')"
                            class="mt-4 inline-block text-blue-500 hover:underline"
                        >
                            Back to Companies
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>