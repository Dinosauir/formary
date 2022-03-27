<template>
    <div class="survey-bar">
        <div class="survey">
            <div class="header">
                <input type="text" name="survey[title]" id="survey_title" value="Title of the form" class="title">
                <input type="text" name="survey[description]" id="survey_description" value="Description of the form"
                       class="description">
            </div>

            <div class="body">
                <question :title="question.title" :description="question.description"
                          v-for="question in questions"
                          :key="question.id" :id="question.id" :editable="question.editable"/>
            </div>
        </div>

        <survey-plus></survey-plus>
    </div>

</template>
<script>
import {reactive} from "vue";

const question = (index = 1) => {
    return {
        id: index,
        title: "Write your current question here ",
        description: "Write a short description here ...",
        inputs: reactive([]),
        editable: false,
    }
};

export default {
    data() {
        return {
            questions: reactive([question(1)]),
        }
    },
    created() {
        this.emitter.on('add-input', this.addInput);
        this.emitter.on('editable', this.makeEditable);
        this.emitter.on('add-question', this.addQuestion);
    },
    methods: {
        addQuestion() {
            this.questions.push(question(this.questions.length + 1));
        },
        addInput: function (item) {
            console.log(item);
        },
        makeEditable(id) {
            let question = this.questions.find(question => question.id === id);
            question.editable = true;
            console.log(question);
        },
        removeInput: function (item) {
            console.log('remove ', item);
        }
    }
}
</script>
