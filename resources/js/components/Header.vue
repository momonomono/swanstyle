<template>
    <div class="c-card__header">
        <img class="c-image__logo" src="img/swanstyle.png">

        <nav class="c-nav__header">
            <ul class="c-nav__header_container">
                <List title="トップページ" url="/" />
                <List title="メニュー" url="/menu" />
                
            </ul>
        </nav>
    </div>
</template>

<script>
    import List from "./ListForHeader.vue";

    export default{
        components :{
            List
        }
    }
</script>