<template>
    <app-layout title="Dashboard">
        <template #header>
            <step-component v-bind:steps="$page.props.steps" v-bind:active_step="current_step"/>
        </template>

  
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="step overflow-hidden shadow-xl sm:rounded-lg ">
                    <race-select-step-component v-if="current_step==0" @race_selected="selectRace"/>
                </div>
                <div class="step overflow-hidden shadow-xl sm:rounded-lg ">
                    <server-list-component v-if="current_step==1" v-bind:games="$page.props.active_games" @join_game="selectGame"/>
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
   import ServerListComponent from '@/Components/ServerListComponent.vue'

    export default defineComponent({
        components: {
            AppLayout,
            RaceSelectStepComponent,
            StepComponent,
            ServerListComponent
        
        },
        data() {
            return {
                current_step: 0,
                form:{
                selected_race: 0,
                game_id: 0
                }
                
            }
        },
        methods: {
            selectRace(race_id){
                console.log(race_id);
                this.form.selected_race = race_id;
                 this.current_step++;
            },
            selectGame(game_id){
                this.form.game_id = game_id;
                this.$inertia.post(route("game.start"), this.form);
                 this.current_step++;
            }

        }

    })
</script>
