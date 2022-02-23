<template>
    <div style="height: 90vh" class="w-full">

  <Renderer height="500" resize ref="renderer">
    <Camera ref="camera" :position="{ z: 1000 }" />
    <Scene ref="scene">
        <AmbientLight :intensity="0.5" />
      <PointLight :position="{ y: 500, z: 0 }" />
      <PointLight color="#ff6000" :intensity="100" :position="{ y: -500, z: 100, x: 100 }" />
     <Sphere v-for="star,index in $page.props.stars" :key="index"  :radius="star.radius" :position="{ x: star.x, y: star.y, z: star.z}">
         <BasicMaterial :color="star.color" />
      </Sphere>
    </Scene>
  </Renderer>
  </div>
 
</template>

<script>
import {Sphere, Camera, PhongMaterial, PointLight, Renderer, Scene,AmbientLight } from 'troisjs';
import { Vector3, BufferGeometry, LineBasicMaterial, Line} from 'three';
export default {
  mounted()
{
const scene = this.$refs.scene;
const camera = this.$refs.camera;
const renderer = this.$refs.renderer;

const material = new LineBasicMaterial( { color: 0x0000ff } );
const points = [];
points.push( new Vector3( 0, 0, 0 ) );
points.push( new Vector3( 200, 200, 0 ) );


const geometry = new BufferGeometry().setFromPoints( points );
const line = new Line( geometry, material );
scene.add(line);
renderer.render(scene, camera);
},
  props: ["stars"],
  components: {  Sphere, Camera, PhongMaterial, PointLight, Renderer, Scene,AmbientLight, Vector3, BufferGeometry, Line },
};

</script> 