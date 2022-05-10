<template>
    <div>
        <img class="p-image__top" src="/img/room_1.jpg">

        <Content title="MENU">
            <Menu />
        </Content>

        <Content title="ACCESS">
            <Access />
        </Content>

        <Content title="SNS">
            <Sns :myid="myid"/>
        </Content>
    </div>
</template>

<script>
    import Content from "../components/Top/Content.vue";
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
            Content,
            Sns,
            Menu,
            Access,
        }
    }
</script>