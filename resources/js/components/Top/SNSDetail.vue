<template>
    <article>
      <img class="p-logo__instagram" src="/img/instagram.png" @click="clickJumpInstgram"/>
      <p class="p-text__instagram" @click="clickJumpInstgram">@__swanstyle.__</p>
    </article>
</template>

<script>
    export default{
        methods : {
            clickJumpInstgram(){
                window.location.href = "https://www.instagram.com/__swanstyle.__/";
            }
        }
    }
</script>