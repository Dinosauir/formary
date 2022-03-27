<template>
    <div class="question">
        <input type="text" name="question[][title]" id="survey_title" :value="this.title" class="title"
               @focusin="markEditable">
        <input type="text" name="question[][description]" id="survey_description" :value="this.description"
               class="description">
    </div>
</template>

<script>
export default {
    props: {
        id: Number,
        title: {
            type: String,
            required: true
        },
        description: {
            type: String,
            required: true
        },
        editable: {
            type: Boolean,
            required: true
        }
    },
    data() {
        return {
            newEditable: this.editable
        }
    },
    methods: {
        markEditable() {
            this.emitter.emit('editable', this.id);
        }
    }
}
</script>

<style scoped>

</style>
