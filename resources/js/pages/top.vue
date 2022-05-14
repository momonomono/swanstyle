<template>
    <div>
        <img class="p-image__top" src="/img/room_1.jpg">

        <Content title="MENU">
            <Menu />
        </Content>

        <div id="js-click_scroll_access">
            <Content title="ACCESS" >
                <Access :details="details"/>
            </Content>
        </div>

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
    import Cookie from "js-cookie";

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
            const cookie = document.cookie;
            const array = cookie.split(';');
            const isAccessFlg = array[0].split('=');

            if(isAccessFlg){
                const access_height = document.querySelector('#js-click_scroll_access').clientHeight;
                console.log(access_height);
                window.scroll({
                    top : access_height,
                })
                
                document.cookie = "isSwanstyleAccessFlg=true;max-age=0";
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