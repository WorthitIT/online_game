<template>
    <game-layout>
        <map-view-component/>
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