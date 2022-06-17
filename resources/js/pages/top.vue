<template>
    <div>
        <div class="p-gird__top">
            <div class="p-gird__topLogo">
                <img class="p-image__logo" src="/img/logo/logo.png">
            </div>
            
            <div class="p-gird__topImage">
                <img class="p-image__top" src="/img/room_1.jpg">
            </div>
        </div>

        <Content title="MENU">
            <Menu />
        </Content>


        <div class="js-click_scroll_access"></div>

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
        data :function (){
            return {
                isShowImageForSP : true,
                innerWidth : window.innerWidth
            }
        },
        props :{
            myid : String,
            details : String
        },
        mounted(){
            window.addEventListener('load',this.scrollAccess);
        },
        methods :{
            clickJumpMainPage(){
                window.location.href = "/";
            },
            scrollAccess(){
                const access_cookie = this.$cookie.get('isAccessFlg');
                console.log(access_cookie);

                if(access_cookie){
                    console.log('success');
                    
                    const access = document.querySelector('.js-click_scroll_access');
                    const access_height = access.getBoundingClientRect().top;
                    const scroll_height = access_height - 200;
                    console.log(scroll_height);

                    window.scroll(0,scroll_height);
                }
                
                this.$cookie.delete('isAccessFlg');
            },
        },
        components :{
            Content,
            Sns,
            Menu,
            Access,
        }
    }
</script>