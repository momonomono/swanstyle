<template>
    <li class="p-text__header" @click="clickJumpPage(url)">
        {{ title }}
    </li>
</template>

<script>
    export default{
        props :{
            title : String,
            url : String
        },
        methods :{
            clickJumpPage(url){

                if(url == "access"){

                    this.$cookie.set('isAccessFlg',true,1);
                    window.location.href="/";
                    
                }else{
                    window.location.href = url
                }
            },
        }
    }
</script>