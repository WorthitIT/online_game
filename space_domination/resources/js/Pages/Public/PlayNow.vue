<template>
    <public-app-layout title="Dashboard">
        
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 <div class="bg-blue-50">
               our game is about nothing and everything it doesn't work but it does how you ask find out by playing our game.
              </div>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               
                <div class="sm:grid sm:grid-cols-3 gap-6">
                <div class="sm:col-span-1 overflow-hidden shadow-xl sm:rounded-lg ">
            
                <div class="w-4/5 m-auto" >  
             <login-glass-block title="Dashboard"/>
             </div>
                   </div>
                    <div class="sm:col-span-2">
                        <div class="w-1/2 m-auto">
                       <h2 class="font-extrabold text-2xl text-blue">BUILD, EXPAND, FIGHT and DOMINATE
                       </h2>
                       <p class="text-gray-100 text-sm">This game is still in development. </p>
                       <p>TODO: @GvdV -> Replace this content with a content block from the database!</p>
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
