<template>
    
    <div @click.prevent="displaySelectedRace(event)" class="race-images w-full relative">
         <img class="w-full  relative" :src="main_image">
         <div class="absolute bottom-0 right-0 text-center w-full">
         <h4 class="py-3 text-black text-2xl  bg-gray-100/60 font-extrabold">{{race.name}}</h4>
        
            </div>
    </div>
   
 
  
    
</template>
<script>
import JetNavLink from"@/Jetstream/NavLink"


export default {
    setup() {
        
    },
    components:{       
         JetNavLink,
       
        
    },
   props: [
       "race",
   ],
   emits:[
       "race_selected"
   ]
   ,computed:{
    
    main_image(){
        if (this.race!=null){
                let main_image=this.race.main_image;
        let images=JSON.parse(this.race.images);
        if (images.length>0){
            main_image=images[0].image;
        }
    return "/img/races/"+main_image;
        }
    return null;
       } 
   
   }
    ,methods:{
       displaySelectedRace(event){
       this.$emit("race_selected",this.race);
       }
   }
}
</script>
<style scoped>
.race-images{
    filter:grayscale(1);
    overflow:hidden;   

}
.race-images:hover{
    filter: grayscale(0);
    cursor:pointer;
    
}


</style>