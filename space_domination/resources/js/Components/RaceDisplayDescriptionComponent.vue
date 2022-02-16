<template>
    
<div v-if="selected_race!=null" class="br-pink text-pink">
{{selected_race.description}}
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