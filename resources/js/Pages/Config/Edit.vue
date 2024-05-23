
<script setup lang="ts">
import  ConfigTest  from '@/Components/Tabs/ConfigTest.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>


<template>
    <div>
        <AuthenticatedLayout>

            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Users</h2>
            </template>
        <h1>Edit Users</h1>
        <ConfigTest />
        </AuthenticatedLayout>
    </div>
</template>
