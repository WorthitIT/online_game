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
            
                   
             <login-glass-block title="Dashboard"/>
                   </div>
                    <div class=" geert smoll piece of teror and horror sm:col-span-2 text-white">
                       <h2>This is a game about con quest about destuction. 
                           Some where in the galaxy is a evil growing that will destroy all if it grows to far all will be toast. You can make a choice to die with honor and glory
                           or die like a nobody lost in space. Log in and play now to find out.
                       </h2>
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
