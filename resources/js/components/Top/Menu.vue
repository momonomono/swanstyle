<template>
  <article class="c-gird__content">

    <div class="c-gird__column">
      <img src="/img/esthetic_2.jpg" class="p-image__menu" />

      <article class="c-gird__column p-top__detail">
        <p class="c-text__sentence">お客様のお悩みを解決できるよう、様々なコースを用意しております</p>
        <button class="c-button__main u-mt-50" @click="clickJumpMenu()">
          全てのメニューを見る
        </button>
      </article>

    </div>
  </article>
</template>

<script>
export default {
  methods : {
    clickJumpMenu(){
      window.location.href="menu";
    }
  }
};
</script>