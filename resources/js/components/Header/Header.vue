<template>
    <div class="l-header p-gird__header" :class="headerObject">
        <img @click="clickJumpMainPage" class="p-logo__main" src="img/swanstyle.png">

        <nav class="c-nav__header">
            <ul class="c-nav__header_container u-mr-30">
                <List title="Menu" url="menu" />
                <List title="Access" url="access" />
                <List title="Contact" url="/contact" />
                <List title="News" url="/news" />
            </ul>
        </nav>
    </div>
</template>

<script>
    import List from "./ListForHeader.vue";
    export default{
        data : function(){
            return{
                scrollY : 0,
                headerFlg : false,
                pagePath : window.location.pathname
            }
        },
        mounted(){
            window.addEventListener('scroll',this.changeHeaderBackground);
        },
        computed :{
            headerObject(){
                return {
                    'js-header__getColor' : this.checkGetColor,
                }
            },
            checkPathName(){
                return this.pagePath !== "/"
            },
            checkGetColor(){
                return this.headerFlg || this.checkPathName;
            }
        },
        methods :{
            changeHeaderBackground(){
                this.scrollY = window.scrollY;
                
                this.headerFlg = this.scrollY > 120 ? true : false ;
            },
            clickJumpMainPage(){
                window.location.href = "/";
            }
        },
        components :{
            List
        }
    }
</script>