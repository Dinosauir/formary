<style>
.survey-plus {
    display: flex;
    padding: 30px 0;
    justify-content: center;
}

.survey-plus h1:hover {
    cursor: pointer;
}

.survey-plus h1 {
    font-size: 32px;
}
</style>

<template>
    <div class="survey-plus" @click="addQuestion">
        <h1>+</h1>
    </div>
</template>

<script>
export default {
    methods: {
        addQuestion() {
            this.emitter.emit('add-question');
        }
    }
}
</script>
