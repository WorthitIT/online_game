<template>
    <div>
        <span v-if="games.data.length==0">No active games found!</span>
    <ul v-else>
        <li v-for="game,index in games.data" :key="index">{{game.name}} - {{game.created_at}}</li>
      
    </ul>
   
  <jet-Nav-link :href="route('thegame')">
	 Join
  </jet-Nav-link>
    </div>
</template>
<script>
import JetNavLink from"@/Jetstream/NavLink"
export default {
    setup() {
        
    },
    components:{
        JetNavLink
    },
    props: [
        "games"
    ]
}
</script>