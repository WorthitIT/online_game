<template>
    <div>
 
          <div class="min-h-screen bg-gray-900	">
              <game-header />
            <main>
                <slot></slot>
            </main>
          </div>
                     <!-- Page Content -->
 
    </div>
 
</template>
<script>
import { Head } from '@inertiajs/inertia-vue3';
import GameHeader from '@/Pages/Game/Header/GameHeader.vue'

export default {
    setup() {
        
    },
    components:{
        Head,
        GameHeader
    }
}
</script>