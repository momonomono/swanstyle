<template>
    <article class="p-card__menu">
        <div class="p-card__menu--title u-mb-10">
            <h2 class="p-text__menu--title">{{ menu.title }}</h2>
            <p class="p-text__menu--time">施術時間 : {{ menu.time }}分</p>
        </div>

        <div class="u-mt-20 u-mb-20">
            <p class="p-text__menu--content" v-for="(text,index) in checkSpace" :key="index">
                {{ text }}
            </p>
        </div>

        <div class="p-card__menu--price">
            <p class="p-text__menu--price">定価価格 : {{ addCommaToPrice(menu.list_price) }} 円</p>
            <p class="p-text__menu--price" v-if="checkFirstPrice">初回価格 : {{ addCommaToPrice(menu.first_price) }} 円</p>
        </div>
    </article>
</template>

<script>
    export default{
        props :{
            menu : {
                required : true
            }
        },
        computed :{
            checkSpace(){
                const splitContent = this.menu.content.split(' ');
                return splitContent;
            },
            checkFirstPrice(){
                if(this.menu.first_price == 0){
                    return false;
                }

                return true
            }
        },
        methods : {
            addCommaToPrice(price){
                return price.toLocaleString();
            }
        }
    }
</script>