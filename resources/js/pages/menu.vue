<template>
    <div class="u-pt-100 u-pb-100">
        <Space />

        <div class="u-pb-100 l-container">
            <Title title="Menu"/>

            <Detail />
        </div>
    </div>
</template>

<script>
    import Detail from "../components/Menu/MenuDetail.vue";
    import Space from "../components/Header/HeaderSpace.vue";
    import Title from "../components/Title.vue";

    export default{
        data : function(){
            return {
                menus :[
                    {
                        title : "ハイドロスプラッシュ",
                        content : ""
                    }
                ]
            }
        },
        components :{
            Detail,
            Space,
            Title
        }
    }
</script>