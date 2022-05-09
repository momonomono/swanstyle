<template>
    <div>
        <div>
            <img class="p-image__top" src="/img/room_1.jpeg">
        </div>

        <!-- メニュー -->
        <Menu />

        <!-- SNS -->
        <Sns :myid="myid"/>

        <!-- アクセス -->
        <Access />

    </div>
</template>

<script>
    import Menu from "../components/Top/Menu.vue";
    import Sns from "../components/Top/SNS.vue";
    import Access from "../components/Top/Access.vue";

    export default{
        props :{
            myid : String,
        },
        methods :{
            clickJumpMainPage(){
                window.location.href = "/";
            }
        },
        components :{
            Sns,
            Menu,
            Access,
        }
    }
</script>