<template>
    <div class="c-card__header" :class="">
        <img @click="clickJumpMainPage" class="p-logo__main" src="img/swanstyle.png">

        <nav class="c-nav__header">
            <ul class="u-display__flex u-mr-30">
                <List title="Menu" url="/menu" />
                <List title="Access" url="/access" />
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
                    'c-card__header--scroll' : this.headerFlg,
                    'c-card__header--top' : this.isTopPage
                }
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