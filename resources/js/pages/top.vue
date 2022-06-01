<template>
    <div class="l-main">
        <img class="p-image__top" src="/img/room_1.jpg">

        <Content title="MENU">
            <Menu />
        </Content>

        <div id="js-click_scroll_access">
        </div>
            <Content title="ACCESS" >
                <Access :details="details"/>
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
            details : String
        },
        methods :{
            clickJumpMainPage(){
                window.location.href = "/";
            }
        },
        mounted(){
            const isAccessFlg = this.$cookie.get('isAccessFlg');
            
            if(isAccessFlg){
                window.scroll(0,759);
                this.$cookie.delete('isAccessFlg');
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