<template>
    <li class="c-nav__header_list" @click="clickJumpPage(url)">
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

                }else{
                    window.location.href = url
                }
            }
        }
    }
</script>