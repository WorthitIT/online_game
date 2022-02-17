<template>
    <div class="bg-white w-full">
        <div class="flex">
        <div v-for="step, index in steps" :key="index" class="step " :class="'w-1/'+steps.length">
        <div :class="index==active_step ? 'active' : ''">
            <div class="step-name"><span>{{step.name}}</span></div>
            <div class="step-point"><div class="step-point-inner"></div></div>
            </div>
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
<style>
.step-point{
    border-radius: 50%;
    background-color: black;
    border: 2px solid #121212;
    width: 32px;
    height: 32px;
    position:relative;
}
.step-point-inner{
    border-radius: 50%;
    background-color: #505050;
    border: 2px solid #f0f0f0;
    width: 26px;
    height: 26px;
    position: absolute;
    top:1px;
    left: 1px;

}
.active .step-point-inner{
    background-color: rgba(72, 173, 208 );
}
</style>