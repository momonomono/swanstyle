<template>
    <div class="l-header p-gird__header">
      <div class="u-bg__header ">

      <!-- ヘッダーの幅 -->
      <div class="l-header__container">
        
        <!-- ヘッダーの配置調整 -->
        <div class="c-gird__header p-gird__header_container">
          
          <!-- ヘッダーロゴ  -->
          <div class="c-gird__center">
            <img 
              @click="clickJumpMainPage" 
              class="p-logo__main" src="img/logo/title_black.png" 
            />
          </div>


          <!-- ヘッダーナビゲーション -->
          <nav class="c-gird__center">
            <ul class="c-nav__header">
              <List title="Menu" url="menu" />
              <List title="Access" url="access" />
              <List title="Contact" url="/contact" />
              <!-- <List title="News" url="/news" /> -->
            </ul>
          </nav>

        </div>

      </div>
    </div>
  </div>
</template>

<script>
import List from "./ListForHeader.vue";
export default {
  data: function() {
    return {
      scrollY: 0,
      headerFlg: false,
      pagePath: window.location.pathname
    };
  },
  mounted() {
    window.addEventListener("scroll", this.changeHeaderBackground);
  },
  computed: {
    headerObject() {
      return {
        "js-header__getColor": this.checkGetColor
      };
    },
  },
  methods: {
    clickJumpMainPage() {
      window.location.href = "/";
    }
  },
  components: {
    List
  }
};
</script>