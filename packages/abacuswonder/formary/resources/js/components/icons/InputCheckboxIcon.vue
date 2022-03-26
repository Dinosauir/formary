<template>
    <svg xmlns="http://www.w3.org/2000/svg" :width="width" :height="height" :viewBox="viewBox">
        <path
            d="M15.227-252.547H1.8A2.772,2.772,0,0,1-.78-254.516H15.227a3.5,3.5,0,0,0,3.357-3.611v-17.216a2.954,2.954,0,0,1,1.831,2.774v14.442A5.4,5.4,0,0,1,15.227-252.547Zm-.61-3.282H-1.254A2.859,2.859,0,0,1-4-258.783v-17.069a2.859,2.859,0,0,1,2.746-2.954H14.617a2.859,2.859,0,0,1,2.747,2.954v17.069A2.859,2.859,0,0,1,14.617-255.83ZM3.005-268.318a.855.855,0,0,0-.23.032.952.952,0,0,0-.656.7,1.037,1.037,0,0,0,.254.96L4.814-264a.878.878,0,0,0,.647.288A.875.875,0,0,0,6.108-264L11.6-269.9a1.046,1.046,0,0,0,.2-1.089.916.916,0,0,0-.843-.6h-.027a.886.886,0,0,0-.63.3l-4.846,5.213-1.795-1.931A.891.891,0,0,0,3.005-268.318Z"
            transform="translate(4 278.807)" :fill=color />
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
