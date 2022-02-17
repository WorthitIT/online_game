<template>
    <div class="w-full bg-sky-900 py-2">
        <div class="flex items-center">
            <div class="ml-5 mr-10">
            <jet-application-mark class="block h-9 w-auto" />
            </div>
            <spaceships-header-component />
            <torpedos-header-component />
        </div>

    </div>

   
</template>
<script>

import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import SpaceshipsHeaderComponent from '@/Pages/Game/Header/SpaceshipsHeaderComponent.vue'
import TorpedosHeaderComponent from '@/Pages/Game/Header/TorpedosHeaderComponent.vue'


export default {
    setup() {
        
    },
    components:{
        JetApplicationMark,
        SpaceshipsHeaderComponent,
        TorpedosHeaderComponent

    }
}
</script>