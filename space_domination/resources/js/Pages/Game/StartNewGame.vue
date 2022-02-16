<template>
    <app-layout title="Dashboard">
        <template #header>
            <step-component v-bind:steps="$page.props.steps"/>
        </template>

  
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                    <race-select-step-component/>
            </div>
    
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
   import AppLayout from "@/Layouts/AppLayout.vue"
   import StepComponent from '@/Components/StepComponent.vue'
    import RaceSelectStepComponent from '@/Components/RaceSelectStepComponent.vue'

    export default defineComponent({
        components: {
            AppLayout,
            RaceSelectStepComponent,
            StepComponent
        
        },

    })
</script>
