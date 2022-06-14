<template>
    <div class="c-gird__main">

        <div class="u-pb-100 l-container">
            <Title title="Menu"/>

            <Detail 
                v-for="(menu,index) in menus" 
                :key="index" 
                :menu="menu" 
            />
        </div>
    </div>
</template>

<script>
    import Detail from "../components/Menu/MenuDetail.vue";
    import Title from "../components/Title.vue";

    export default{
        data : function(){
            return {
                menus :[
                    {
                        title : "毛穴洗浄＋小顔フェイシャルMFIP",
                        time : 90,
                        content : "素水で頑固な汚れを吸収&洗浄し取り除くトリートメントと小顔フェイシャルのセットです.毛穴洗浄後にMFIP",
                        list_price : 19800,
                        first_price : 14800,
                        pre_price : 12000
                    },
                    
                ]
            }
        },
        components :{
            Detail,
            Title
        }
    }
</script>