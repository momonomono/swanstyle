<template>
  <article class="u-mt-30 c-card__slider" >
    <img v-for="number in test"
        :key="number"
        class="p-image__instagram" 
        src="/img/no_image_square.jpeg"
    />
  </article>
</template>

<script>
    export default {
        data : function(){
            return {
                test : [1,2,3,4,5]
            }
        },
        props :{

        }
    };
</script>