<template>
  <div class="l-container">
    <Title title="SNS" />

    <article class="u-align__center">
      
      <article class="u-mb-100">
        <img class="p-logo__instagram" src="/img/instagram.png" />
        <p class="p-text__instagram">{{ myid }}</p>
      </article>

      <Slider />
    </article>
  </div>
</template>

<script>
import Title from "../Title.vue";
import Slider from "./SNSSlider.vue";

export default {
  props :{
    myid : String
  },
  components: {
    Title,
    Slider
  }
};
</script>