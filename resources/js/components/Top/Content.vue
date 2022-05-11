<template>
  <div class="l-container">
    <div class="p-card__content">
      <Title :title="title"/>

      <slot></slot>
    </div>
  </div>
</template>

<script>
    import Title from "./Title.vue";

    export default{
        props :{
          title :{
            type : String,
            required : false
          },
          myid :{
            type : String,
            required : false
          }
        },
        components :{
            Title
        }
    }
</script>