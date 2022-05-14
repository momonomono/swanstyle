<template>
  <article class="p-card__access">
    <article class="p-top__access">


      <Detail v-for="(detail,index) in changeDetailsJson" :key="index">
        
        <template #heading>
          <p class="c-text__sentence">{{ detail.heading }}</p>
        </template>



        <template #description>
          <p
            class="c-text__sentence"
            v-for="(text,index) in splitDescript(detail.description)"
            :key="index"
          >{{ text }}</p>
        </template>

      </Detail>
      
    </article>

    <iframe
      class="p-image__access"
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2324.4039001333454!2d137.1144693301983!3d35.36516506190258!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036ac8e6882d47%3A0x14c7348a44cfdf3e!2z44CSNTA3LTAwNzEg5bKQ6Zic55yM5aSa5rK76KaL5biC5pet44Kx5LiY77yR77yQ5LiB55uu77yW4oiS77yR77yV!5e0!3m2!1sja!2sjp!4v1651800868468!5m2!1sja!2sjp"
    ></iframe>
  </article>
</template>

<script>
import Detail from "../Access/Detail.vue";

export default {
  props: {
    details: {
      type: String,
      required: true
    }
  },
  computed: {
    changeDetailsJson() {
      return JSON.parse(this.details);
    }
  },
  methods: {
    splitDescript(str) {
      return str.split(",");
    }
  },
  components: {
    Detail
  }
};
</script>