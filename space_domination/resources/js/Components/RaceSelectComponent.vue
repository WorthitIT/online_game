<template>
    
<div class="sm:grid sm:grid-cols-2 gap-0">
    <div v-for="race,index in races" :key="index">
<race-display-component  v-bind:race="race"> </race-display-component>
</div>
     </div>
 
  
    
</template>
<script>
import JetNavLink from"@/Jetstream/NavLink"
import RaceDisplayComponent from"@/Components/RaceDisplayComponent.vue"

export default {
    setup() {
        
    },
    components:{
        JetNavLink,
        RaceDisplayComponent,
       
        
    },
   props: [
       "races",
   ]
}
</script>