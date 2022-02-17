<template>
    <div class="w-full bg-sky-900 py-2 flex">
            <div class="w-1/3 flex items-center">
            <div class="ml-5 mr-10">
            <jet-application-mark class="block h-9 w-auto" />
            </div>
            <spaceships-header-component />
            <torpedos-header-component />
            </div>
           <div class="w-1/3">
           <resources-header-component/>
           </div>
            <div class="w-1/3  ">
            <profile-header-component/>
            </div>
         </div>

   

   
</template>
<script>

import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import SpaceshipsHeaderComponent from '@/Pages/Game/Header/SpaceshipsHeaderComponent.vue'
import TorpedosHeaderComponent from '@/Pages/Game/Header/TorpedosHeaderComponent.vue'
import ResourcesHeaderComponent from '@/Pages/Game/Header/ResourcesHeaderComponent.vue'
import ProfileHeaderComponent from '@/Pages/Game/Header/ProfileHeaderComponent.vue'


export default {
    setup() {
        
    },
    components:{
        JetApplicationMark,
        SpaceshipsHeaderComponent,
        TorpedosHeaderComponent,
        ResourcesHeaderComponent,
        ProfileHeaderComponent

    }
}
</script>