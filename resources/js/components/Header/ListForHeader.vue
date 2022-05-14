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

                    document.cookie = "isSwanstyleAccessFlg=true";
                    window.location.href="/";
                    
                }else{
                    window.location.href = url
                }
            },
        }
    }
</script>