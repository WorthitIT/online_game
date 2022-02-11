<template>
    <public-app-layout title="Dashboard">
        
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               our game is about nothing and everything it doesn't work but it does how you ask find out by playing our game.
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="sm:grid sm:grid-cols-3 gap-6">
                <div class="sm:col-span-1">
             <login-glass-block title="Dashboard"/>
                   </div>
                    <div class="sm:col-span-2">
                   </div>
                 </div>
              </div>
            </div>
         </div>
    
    </public-app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import PublicAppLayout from "@/Layouts/PublicAppLayout.vue"
    import LoginGlassBlock from "@/Components/LoginGlassBlock.vue"
    export default defineComponent({
        components: {
           PublicAppLayout,
           LoginGlassBlock,
           
         
        },
    })
</script>
