<template>
    <article>
      <img class="p-logo__instagram" src="/img/instagram.png" />
      <p class="p-text__instagram">@{{ myid }}</p>
    </article>
</template>

<script>
    export default{
        props :{
            myid : String
        }
    }
</script>