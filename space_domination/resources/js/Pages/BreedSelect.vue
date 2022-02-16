<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               play game
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex">
                    
                    <div class="w-1/6 "></div>
                    <div class="w-5/6 flex">

                        <div class="w-2/3">
                       
                      <race-select-component @race_selected="displaySelectedRace" v-bind:races="$page.props.races"/>
                    </div>
                    <div class="w-1/3">
                      <race-display-description-component v-bind:selected_race="race"/>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
   import AppLayout from "@/Layouts/AppLayout.vue"
    import RaceSelectComponent from '@/Components/RaceSelectComponent.vue'
    import  RaceDisplayDescriptionComponent from '@/Components/RaceDisplayDescriptionComponent.vue'

    export default defineComponent({
        components: {
           AppLayout,
         RaceSelectComponent,
         RaceDisplayDescriptionComponent,
        
        
        }

        ,data(){
       return{
           race: null
        
       }
   }
     ,methods:{
        
       displaySelectedRace(race){
     this.race=race;
       }
   }
    })
</script>
