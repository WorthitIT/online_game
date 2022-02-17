<template>
    <app-layout title="Dashboard">
        <template #header>
            <step-component v-bind:steps="$page.props.steps" v-bind:active_step="current_step"/>
        </template>

  
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg ">
                    <race-select-step-component v-if="current_step==0" @race_selected="selectRace(race_id)"/>
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
        data() {
            return {
                current_step: 0,
                selected_race: 0
            }
        },
        methods: {
            selectRace(race_id){
                this.selected_race = race_id;
                 this.current_step++;
            }

        }

    })
</script>
