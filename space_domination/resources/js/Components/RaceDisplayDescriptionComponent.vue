<template>
    
<div v-if="selected_race!=null" class="text-black bg-gray-300">
<h4 class="text-black text-xl border-4 border-blue blue-glass">{{selected_race.name}}</h4>
 <img class="w-full  relative" :src="second_image">
<span class="text-black bg-gray">{{selected_race.description}}</span>
<div class=" w-full flex justify-center py-2">
 <jet-button class=" blue-glass text-white-200 m-0.5 rounded-lg" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
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
   }
  
}
</script>