<template>
    <div class="input">
        <div class="logo">
            <slot name="logo"></slot>
        </div>

        <div class="body">
            <div class="name">
                <h5>{{ this.name }}</h5>
            </div>
            <div class="description">
                <p>{{ this.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        description: String
    }
}
</script>
