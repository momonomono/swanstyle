<template>
    <label class="p-card__input u-mb-30">

        <div>
            <p class="c-text__label u-mb-10">{{ data.labelName }}</p>
            <p class="c-text__err u-mb-10">{{ getErrMsg }}</p>
        </div>

        <input 
            type="text" 
            class="c-input__bottom"
            :name="data.inputName"
        >
        
        
    </label>
</template>

<script>
    export default{
        data : function(){
            return {
                errMsg : this.errors[this.data.inputName]
            }
        },
        props :{
            data : {
                required : true
            },
            errors :{
                required : false
            },
        },
        computed :{
            getErrMsg(){
                if(this.errMsg == undefined){
                    return "";
                }

                return this.errMsg[0];
            },
        }
    }
</script>