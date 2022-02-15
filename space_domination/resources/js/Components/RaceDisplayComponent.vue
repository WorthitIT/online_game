<template>
    
    <div class="race-images w-full h-full">
         <img class="w-full" :src="main_image">
            </div>
     
 
  
    
</template>
<script>
import JetNavLink from"@/Jetstream/NavLink"


export default {
    setup() {
        
    },
    components:{
        JetNavLink,
       
        
    },
   props: [
       "race",
   ],
   computed:{
    main_image(){
    return "/img/races/"+this.race.main_image;
       } 
   }
   
}
</script>