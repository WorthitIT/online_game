<template>
    <div>
        <span v-if="games.data.length==0">No active games found!</span>
    <div v-else>
        <div  class="blue-glass p-5 justify-center gap-4 sm:grid sm:grid-cols-4 py-1 text-white" v-for="game,index in games.data" :key="index">
            <div class="gap-2  sm:col-span-2 text-left mt-1.5">{{game.name}}</div>
            <div class="gap-2 sm:col-span-1 mt-1.5" v-html="get_game_created_at(game.created_at)"></div>
            <div class="gap-2 sm:col-span-1 text-right"><jet-button class="bg-green-500" @click.prevent="joinGame(game.id)">JOIN NOW</jet-button></div>
        </div>
 
   </div>
    </div>
</template>
<script>
import JetNavLink from"@/Jetstream/NavLink"
import JetButton from"@/Jetstream/Button"

export default {
    setup() {
    },
    components:{
        JetNavLink,
        JetButton,
        
    },
    props: [
        "games"
    ],
    emits: ["join_game"]
    ,computed:{
    
    

        
        
    }

    ,methods: {
         joinGame(id){
            console.log(id);
            this.$emit("join_game", id);
          
        },
        get_game_created_at(created_at){
       const date1 = new Date(created_at);
       var day = date1.getDate(); 
       day=day<=9 ? "0"+day : day; 
       var month = date1.getMonth()+1;
       month=month<=9 ? "0"+month : month;
      var year = date1.getFullYear();
    
      return day+"-"+month+"-"+year;
    
    }
   
    }
}
</script>