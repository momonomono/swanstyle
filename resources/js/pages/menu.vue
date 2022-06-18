<template>

    <div class="l-container">
        <div class="c-gird__main u-pb-100">
            <Title title="MENU"/>

            <section class="l-menu u-mt-50 u-mb-30">
                <Detail 
                    v-for="(menu,index) in menus" 
                    :key="index" 
                    :menu="menu" 
                />
            </section>
        </div>
    </div>
</template>

<script>
    import Detail from "../components/Menu/MenuDetail.vue";
    import Title from "../components/Title.vue";

    export default{
        props : {
            menus :{
                required : true
            }
        },
        components :{
            Detail,
            Title
        }
    }
</script>