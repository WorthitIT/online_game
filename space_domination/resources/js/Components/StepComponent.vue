<template>
    <div class="bg-white w-full">
        <div class="flex">
        <div v-for="step, index in steps" :key="index" class="step " :class="'w-1/'+steps.length">
            <div class="step-name"><span>{{step.name}}</span></div>
            </div>
        </div>
     </div>
    
</template>
<script>
export default {
    setup() {
        
    },
    props: {
        steps: {
            default: []
        }
    }

    ,
    data() {
         return {
             active_step: 0
         }
    }
}
</script>