<template>
<div class="c-gird__content">
  <article class="u-align__center">
    
    <Detail :myid="myid"/>

    <Slider :pictures="pictures"/>
  </article>
</div>
</template>

<script>
import Detail from "./SNSDetail.vue";
import Slider from "./SNSSlider.vue";

export default {
  props: {
    myid: String,
    pictures : String
  },
  components: {
    Detail,
    Slider,
  },
};
</script>