<template>
    <article>
        <div>
            <h2 class="p-text__menu--title">{{ menu.title }}</h2>
            <p></p>
        </div>

        <div class="">
            <p class="p-text__menu--content">{{ menu.content }}</p>
        </div>

        <div>
            <p>{{ menu.list_price }}</p>
            <p>{{ menu.first_price }}</p>
            <p>{{ menu.pre_price }}</p>
        </div>
    </article>
</template>

<script>
    export default{
        props :{
            menu : {
                type : Object,
                required : true
            }
        }
    }
</script>