<template>
    
<div v-if="selected_race!=null" class="text-white br-gray-light">
<span class="text-black br-gray-light">{{selected_race.description}}</span>
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
       "selected_race",
   ]
   ,data(){
       return{
        
       }
   }
  
}
</script>