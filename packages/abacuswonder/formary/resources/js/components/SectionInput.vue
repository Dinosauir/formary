<template>
    <div class="section-input">
        <button>
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

        </button>
        <button class="add-item"><span @click="addInput">+</span></button>
    </div>
</template>

<script>
export default {
    props: {
        id: Number,
        name: String,
        type: String,
        description: String
    },
    data() {
        return {
            input: {
                type: this.type,
                name: this.name,
                question_id: null,
            },
        }
    },
    created() {

    },
    methods: {
        addInput() {
            this.emitter.emit('add-input', this.input);
        },
        removeInput() {
            this.emitter.emit('remove-input', this.input);
        }
    }
}
</script>
