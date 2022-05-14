<template>
    <div class="l-container">
        <Space />

        <article class="p-gird__main">
           
           <div class="u-align__center">
                <h1 class="c-text__title">ACCESS</h1>
           </div>

           <article>
               <div v-for="(detail,index) in changeJson" :key="index">
                   {{ detail.heading }}
               </div>
           </article>

        </article>
    </div>
</template>

<script>
    import Space from "../components/Header/HeaderSpace.vue";

    export default{
        props :{
            details :{
                required: true
            }
        },
        computed :{
            changeJson(){
                return JSON.parse(this.details);
            }
        },
        components :{
            Space
        }
    }
</script>