<template>
<div class="l-main">
  <div class="l-container">
    <div class="c-gird__main">
      <Title title="CONTACT" />

      <section class="p-card__contact">
        <p class="p-text__contact">お電話でのお問い合わせ・ご予約</p>
        <p class="p-text__contact--telephone">
          tel
          <strong class="p-text__contact--number">080-3388-8799</strong>
        </p>
      </section>
    </div>
  </div>
</div>
</template>

<script>
import Title from "../components/Title.vue";
import Input from "../components/Contact/Input.vue";

export default {
  data: function() {
    return {
      inputData: [
        {
          labelName: "名前",
          inputName: "name",
          necessity: true,
          type: "text"
        },
        {
          labelName: "フリガナ",
          inputName: "furigana",
          necessity: false,
          type: "text"
        },
        {
          labelName: "メールアドレス",
          inputName: "mail",
          necessity: true,
          type: "text"
        },
        {
          labelName: "電話番号",
          inputName: "phone_number",
          necessity: false,
          type: "text"
        },
        {
          labelName: "お問い合わせ",
          inputName: "message",
          necessity: false,
          type: "textarea"
        }
      ]
    };
  },
  props: {
    csrf: {
      type: String,
      required: true
    },
    errors: {
      required: false
    }
  },
  components: {
    Title,
    Input
  }
};
</script>