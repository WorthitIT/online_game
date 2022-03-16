<template>
    <div @mouseleave="stopDragging()" @mouseup="stopDragging()" @mousemove="dragWindow($event)" @mousedown.prevent="startDragging()" :style="{top : top+'px', 'left' : left+'px'}" :class="{'hidden' : !show}" class="absolute max-w-7xl border border-blue-500 border-2 rounded shadow">
        <div class=" w-full bg-blue-500 h-8">
            <div class="sm:grid sm:grid-cols-12">
                <div class="col-span-11">
                    <div class="ml-3">
                    <span class="leading-7 text-left text-sm font-bold text-blue-50">{{title}}</span>
                    </div>
                </div>
                <div class="">
                    <div style="margin-top:0.2em;" @click.prevent="close()" class="  close-button float-right rounded-full h-6 w-6 bg-blue-600 flex justify-center mr-2">
                    <span class="leading-6 close-button fa-solid fa-times text-blue-50"></span>
                    </div>
                </div>
            </div> 
        </div>
        <div class="px-3 py-5 w-full bg-gray-900/90 min-h-fit text-blue-100">
            <slot name="content"></slot>
        </div>

    </div>
</template>
<script>
export default {
    setup() {
        
    },
    props: ["title", "show"],
    emits: ['closed'],
    data () {
        return {
              top: 150,
            left: 100,
            dragging: false,
        }
    },
    methods:{
        startDragging(){
            this.dragging=true;
        },
        stopDragging(){
            this.dragging=false;
        },
        dragWindow(event){
            if (this.dragging){

                this.top = parseInt(event.y)-25;
                this.left = parseInt(event.x)-50;
 //               console.log(this.top+","+this.left);
             }
        },
        close(){
            this.$emit("closed");
        }
    }
}
</script>
<style scoped>
.close-button{
    transition: .75s;
    cursor: pointer;
}
.close-button:hover span{
    transform: rotateZ(360deg);
    animation: rotate-button;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}
@keyframes rotate-button {
  0% { transform: rotateZ(0deg) }
  50% { transform: rotateZ(360deg); }
   100% { transform: rotateZ(0deg); }
}
</style>