<script setup lang="ts">
import { DxScheduler } from 'devextreme-vue';

const
views=[{
            type: 'month',
            name: 'Mes',

        }, {
            type: 'week',
            name: 'Semana',
        },
        {
            type: 'day',
            name: 'Día',
        },

];

const start = 6;
const end = 22;

</script>

<template>
    <div>
        <DxScheduler
            time-zone="America/El_Salvador"
            :current-view="views[0]"
            :views="views"
            height="600"
            :start-day-hour="start"
            :end-day-hour="end"

         />
    </div>

</template>
