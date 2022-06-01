<template>
    <div class="u-pt-100 u-pb-100">
        <Space />

        <div class="u-pb-100 l-form">
            <Title title="CONTACT" />

            <form method="post">
                <input type="hidden" name="_token" :value="csrf">

                <div class="u-pt-50 u-pb-30">
                    <Input 
                        v-for="(data,index) in inputData" 
                        :key="index" 
                        :data="data"
                        :errors="errors"
                    />
                </div>

                <button class="c-button__form">送信</button>

            </form>

        </div>
        
    </div>
</template>

<script>
    import Space from "../components/Header/HeaderSpace.vue";
    import Title from "../components/Title.vue";
    import Input from "../components/Contact/Input.vue";

    export default{
        data : function(){
            return{
                inputData :[
                    {
                        labelName : "名前",
                        inputName : "name",
                        necessity : true
                    },
                    {
                        labelName : "フリガナ",
                        inputName : "furigana",
                        necessity : false
                    },
                    {
                        labelName : "メールアドレス",
                        inputName : "mail",
                        necessity : true
                    },
                    {
                        labelName : "電話番号",
                        inputName : "phone_number",
                        necessity : false
                    },
                    {
                        labelName : "お問い合わせ",
                        inputName : "message",
                        necessity : false
                    }
                ]
            }
        },
        props :{
            csrf : {
                type : String,
                required : true
            },
            errors :{
                required : false
            },
        },
        components:{
            Space,
            Title,
            Input
        }
    }
</script>