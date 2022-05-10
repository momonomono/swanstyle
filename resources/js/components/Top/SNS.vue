<template>
  <article class="u-align__center">
    
    <Detail :myid="myid"/>

    <Slider />
  </article>
</template>

<script>
import Detail from "./SNSDetail.vue";
import Slider from "./SNSSlider.vue";

export default {
  props: {
    myid: String,
  },
  components: {
    Detail,
    Slider,
  },
};
</script>