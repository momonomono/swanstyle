<template>
    <div class="l-main">
        <section class="c-gird__main">
            <Title title="NEWS" />

            <NewItem />
        </section>

    </div>
</template>

<script>
    import Title from "../components/Title.vue";
    import NewsItem from "../components/News/NewItem.vue";

    export default{
        components :{
            Title,
            NewsItem 
        }
    }
</script>