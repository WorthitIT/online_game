<template>
    <public-app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              <div> choose a server</div>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <server-list-component v-bind:games="$page.props.active_games"/>
                </div>
            </div>
        </div>
    
    </public-app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
   import PublicAppLayout from "@/Layouts/PublicAppLayout.vue"
    import ServerListComponent from '@/Components/ServerListComponent.vue'

    export default defineComponent({
        components: {
           PublicAppLayout,
            ServerListComponent,
         
        },
    })
</script>