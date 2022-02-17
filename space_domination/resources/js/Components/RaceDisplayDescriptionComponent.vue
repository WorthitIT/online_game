<template>
    
<div v-if="selected_race!=null" class="text-black bg-gray-300 p-5">
<h4 class="text-center text-blackfont-extrabold text-2xl mb-5">{{selected_race.name}}</h4>
<div class=" rounded-full border-1 border-grey-400 ">
 <img class=" relative " :src="second_image">
 </div>
 <div class="w-full mt-5">
<span class="text-grey-900 text-sm black bg-gray">{{selected_race.description}}</span>
</div>
<div class=" w-full flex justify-center py-2">
 <jet-button @click.prevent="selectedRace" class=" mt-5 blue-glass text-white-200  rounded-lg" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    choose race
                </jet-button>
</div>
</div>
</template>
<script>
import JetNavLink from"@/Jetstream/NavLink"
import JetButton from '@/Jetstream/Button.vue'


export default {
    setup() {
        
    },
    components:{
        JetNavLink,
     JetButton,
        
    },
      emits: ['race_submitted'],
 
   props: [
       "selected_race",
   ]
   ,data(){
       return{
           form:{
               processing:false
           }
        
       }
   }
   ,computed:{
    
    second_image(){
        if (this.selected_race!=null){
                let second_image=this.selected_race.main_image;
        let images=JSON.parse(this.selected_race.images);
        if (images.length>1){
            second_image=images[1].image;
        }
    return "/img/races/"+second_image;
        }
    return null;
       } 
   },
   methods:{
       selectedRace() {
           this.$emit("race_submitted", this.selected_race.id);
       }
   }
  
}
</script>