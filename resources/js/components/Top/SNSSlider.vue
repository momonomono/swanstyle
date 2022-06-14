<template>
<div class="l-slider">
    <Hooper :settings="hooperSettings" >
        <Slide >
            <img class="p-image__instagram" src="/img/esthetic_2.jpg">
        </Slide>
        <Slide >
            <img class="p-image__instagram" src="/img/no_image_square.jpg">
        </Slide>
        <Slide >
            <img class="p-image__instagram" src="/img/no_image_square.jpg">
        </Slide>
        <Slide >
            <img class="p-image__instagram" src="/img/no_image_square.jpg">
        </Slide>
        <Slide >
            <img class="p-image__instagram" src="/img/no_image_square.jpg">
        </Slide>

        <hooper-navigation slot="hooper-addons"></hooper-navigation>
        <hooper-pagination slot="hooper-addons"></hooper-pagination>
    </Hooper>
</div>
</template>

<script>
    import { 
        Hooper,
        Slide,
        Pagination as HooperPagination,
        Navigation as HooperNavigation
    } from "hooper";

    export default {
        data : function(){
            return {
                hooperSettings :{
                    infiniteScroll : true,
                    transition : 1500,
                    autoPlay: true,
                    playSpeed : 4000
                },
            }
        },
        components :{
            Hooper,
            Slide,
            HooperPagination,
            HooperNavigation,
        }
    };
</script>