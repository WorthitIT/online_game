<template>
    <div>
        <span v-if="games.data.length==0">No active games found!</span>
    <div v-else>
        <div  class="p-5 justify-center gap-4 sm:grid sm:grid-cols-4 py-1" v-for="game,index in games.data" :key="index">
            <div class="sm:col-span-2 text-left">{{game.name}}</div>
            <div class="sm:col-span-1">{{game.created_at}}</div>
            <div class="sm:col-span-1 text-right"><jet-button @click.prevent="joinGame(game.id)">JOIN</jet-button></div>
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
        JetButton
    },
    props: [
        "games"
    ],
    methods: {
         joinGame(id){
            console.log(id);
            this.$inertia.get(route("thegame", [id]));
        }
    }
}
</script>