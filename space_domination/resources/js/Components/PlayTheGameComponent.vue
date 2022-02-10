<template>
    <div>
        <span v-if="games.data.length==0">No active games found!</span>
    <ul v-else>
        <li v-for="game,index in games.data" :key="index">{{game.name}}</li>
    </ul>
    </div>
</template>
<script>
export default {
    setup() {
        
    },
    props: [
        "games"
    ]
}
</script>