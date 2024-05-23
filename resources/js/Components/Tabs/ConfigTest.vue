<script setup lang="ts">
import { DxTabs } from 'devextreme-vue';
import { ref } from 'vue';

const tabs = ref([
    { text: 'Tab 1', icon: 'home' },
    { text: 'Tab 2', icon: 'user' },
    { text: 'Tab 3', icon: 'comment' },
]);
</script>

<template>
    <Head title="Dashboard" />

<AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Configuracion</h2>
    </template>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <h1>Tab Template</h1>
                </div>
                <DxTabs :items="tabs"  />
            </div>
        </div>
    </div>
</AuthenticatedLayout>
</template>

<style scoped>
</style>
