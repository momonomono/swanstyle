<template>
<div class="l-slider">
    <Hooper :settings="hooperSettings" >
        <Slide v-for="(picture ,index) in encodePictures" :key="index">
            <img class="p-image__instagram" :src="picture.media_url">
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
        props : {
            pictures : String
        },
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
        computed :{
            encodePictures(){
                const encode_picuters = JSON.parse(this.pictures);

                return encode_picuters.media.data;
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