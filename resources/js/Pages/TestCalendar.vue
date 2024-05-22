<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CalendarSelection from '@/Components/CalendarSelection.vue';
import { Head } from '@inertiajs/vue3';

const sayHelloWorld = () => {
    alert('Hello World!');
};
</script>

<template>
    <Head title="Test Calendar" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">About</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <CalendarSelection />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
