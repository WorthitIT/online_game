<template>
    <game-layout>
        <map-view-component v-bind:stars="$page.props.stars" v-bind:hyperspacetunnels="$page.props.hyperspacetunnel"/>
    </game-layout>
</template>
<script>
import GameLayout from '@/Layouts/GameLayout.vue'
import MapViewComponent from '@/Components/Game/MapViewComponent.vue'

export default {
    setup() {
        
    },
    components:{
        GameLayout,
        MapViewComponent
    }
}
</script>