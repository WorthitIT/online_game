<template>
    <div style="height: 90vh" class="w-full">

  <Renderer height="500" resize ref="renderer">
    <Camera :position="{ z: 1000 }" />
    <Scene>
        <AmbientLight :intensity="0.5" />
      <PointLight :position="{ y: 500, z: 0 }" />
      <PointLight color="#ff6000" :intensity="100" :position="{ y: -500, z: 100, x: 100 }" />
     <Sphere v-for="star,index in $page.props.stars" :key="index"  :radius="star.radius" :position="{ x: star.x, y: star.y, z: star.z}">
         <PhongMaterial color="#00ffff" />
      </Sphere>
    </Scene>
  </Renderer>
  </div>
</template>

<script>
import { Sphere, Camera, PhongMaterial, PointLight, Renderer, Scene,AmbientLight } from 'troisjs';
export default {
  components: { Sphere, Camera, PhongMaterial, PointLight, Renderer, Scene,AmbientLight },
};
</script> 