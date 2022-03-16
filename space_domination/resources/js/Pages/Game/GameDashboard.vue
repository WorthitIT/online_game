<template>
    <game-layout>
        <div class="w-full">
        <map-view-component @starpressed="view_solarsystem" v-bind:stars="$page.props.stars" v-bind:hyperspacetunnels="$page.props.hyperspacetunnel"/>
        <solar-system-view ref="solarsystemview" v-bind:star="active_star"/>
          </div>

    </game-layout>
</template>
<script>
import GameLayout from '@/Layouts/GameLayout.vue'
import MapViewComponent from '@/Components/Game/MapViewComponent.vue'
import SolarSystemView from '@/Components/Game/SolarSystemView.vue'

export default {
    setup() {
        
    },
    components:{
        GameLayout,
        MapViewComponent,
        SolarSystemView
    },
    data() {
        return {
            active_star: null
        }
    },
    methods:{
        view_solarsystem(star){
            this.active_star = star;
            console.log( this.$refs.solarsystemview);
            this.active_star = star;
            this.$refs.solarsystemview.$data.show_solar=true;

        }
    }
}
</script>