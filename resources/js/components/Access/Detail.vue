<template>

    <article class="c-card__content">
        <div class="c-card__halfBox">
            <slot name="heading"></slot>
        </div>
        <div class="c-card__halfBox">
            <slot name="description"></slot>
        </div>
    </article>

</template>

<script>
    export default{
        
    }
</script>