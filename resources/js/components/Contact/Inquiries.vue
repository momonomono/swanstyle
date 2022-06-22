<template>
  <section>
    <form>
      <Input
        v-for="(data, index) in items"
        :key="index"
        :data="data"
        :errors="errors"
      />

      <button>送信</button>

    </form>
  </section>
</template>

<script>
    import Input from "./Input.vue";

    export default{
        props :{
            items :{
                required : true
            },
            errors :{
                required : false
            }
        },
        components :{
            Input
        }
    }
</script>