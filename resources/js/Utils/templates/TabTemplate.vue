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
    <div>
        <h1>Tab Template</h1>
    </div>
    <DxTabs :items="tabs"  />
</template>

<style scoped>
</style>
