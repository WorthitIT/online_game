<template>
 
                <div class="flex">
                    
                    <div class="w-full flex">

                        <div class="w-2/3">
                       
                      <race-select-component @race_selected="displaySelectedRace" v-bind:races="$page.props.races"/>
                    </div>
                    <div class="w-1/3">
                      <race-display-description-component v-bind:selected_race="race"/>
                     </div>
                    </div>
                </div>
    

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
