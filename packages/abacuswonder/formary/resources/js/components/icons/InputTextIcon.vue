<template>
    <svg xmlns="http://www.w3.org/2000/svg" :width="width" :height="height" :viewBox="viewBox">
        <path id="icons8-multiline-text"
              d="M7.062,22.086a1.062,1.062,0,1,0,0,2.124H30.43a1.062,1.062,0,1,0,0-2.124Zm0,4.957a1.062,1.062,0,1,0,0,2.124H22.641a1.062,1.062,0,1,0,0-2.124Z"
              transform="translate(-6 -22.086)" :fill="color"/>
    </svg>
</template>

<script>
export default {
    props: {
        color: {
            type: String,
            required: true
        },
        width: {
            type: String,
            required: true
        },
        height: {
            type: String,
            required: true
        }
    },
    computed: {
        viewBox: function () {
            return `0 0 ${this.width} ${this.height}`;
        }
    }
}
</script>
