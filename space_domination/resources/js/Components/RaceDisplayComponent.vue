<template>
    
    <div @click.prevent="displaySelectedRace(event)" class="race-images w-full h-full relative">
         <img class="w-full  relative" :src="main_image">
         <div class="absolute bottom-0 right-0 text-center w-full">
         <h4 class="text-black text-xl border-4 border-blue blue-glass">{{race.name}}</h4>
            </div>
    </div>
   
 
  
    
</template>
<script>
import JetNavLink from"@/Jetstream/NavLink"


export default {
    setup() {
        
    },
    components:{        JetNavLink,
       
        
    },
   props: [
       "race",
   ],
   emits:[
       "race_selected"
   ]
   ,computed:{
    
    main_image(){
    return "/img/races/"+this.race.main_image;
       } 
   }
    ,methods:{
       displaySelectedRace(event){
       this.$emit("race_selected",this.race);
       }
   }
}
</script>