<template>
    <div style="height: 90vh" class="w-full">

  <Renderer height="500" resize ref="renderer">
    <Camera :position="{ z: 1000 }" />
    <Scene>
        <AmbientLight :intensity="1" />
     <Sphere v-for="star,index in $page.props.stars" :key="index"  :radius="star.radius" :position="{ x: star.x, y: star.y, z: star.z}">
         <BasicMaterial :color="star.color" />
      </Sphere>
    </Scene>
  </Renderer>
  </div>
</template>

<script>
import { Sphere, Camera, BasicMaterial, PointLight, Renderer, Scene,AmbientLight } from 'troisjs';
export default {
  components: { Sphere, Camera, BasicMaterial, PointLight, Renderer, Scene,AmbientLight },
};
</script> 