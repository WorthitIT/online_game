<template>
    <window-view-component @closed="closeView" :title="'Viewing solarsystem: Sol'" v-bind:show="show_solar">
        <template #content>
            <div class="w-full">
            <h2 v-if="star!=null">{{star.name}}</h2>
            </div>
            <div class="pt-5 text-blue-50">
                Dit is een voorbeeld window View.
                Deze willen we kunnen vergroten/verkleinen en kunnen verplaatsen.
            </div>
        </template>
    </window-view-component>
</template>
<script>
import WindowViewComponent from "@/Components/Game/WindowViewComponent"
export default {
    setup() {
        
    },
    components: {
        WindowViewComponent
    },
    props:["star"],
    data() {
        return {
            show_solar: false
        }
    },
    methods:{
        show(){
            this.show_solar=true;
        },
        closeView(){
            this.show_solar=false;
            console.log("view closed");
        }
    }
}
</script>