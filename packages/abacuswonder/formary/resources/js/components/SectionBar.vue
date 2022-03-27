<template>
    <div class="section-bar">
        <card>
            <template #header>
                <h1>Choose a new section</h1>
            </template>

            <template #body>
                <section-input v-for="input in inputs"
                               :id="input.id"
                               :key="input.id"
                               :name="input.name"
                               :type="input.type"
                               :description="input.description">
                    <template #logo>
                        <component :is="input.icon" :color="primary_color" :height="input.height" :width="input.width"/>
                    </template>
                </section-input>
            </template>
        </card>
    </div>
</template>

<script>
export default {
    data() {
        return {
            primary_color: "#40BB48",
            inputs: [
                {
                    id: 33,
                    name: 'Short Answer Text',
                    type: 'input-text',
                    description: 'For short answers like name, address, ...',
                    icon: "input-text-icon",
                    height: "7.893",
                    width: "23.893"
                },
                {
                    id: 2,
                    name: 'Multiple choice',
                    type: 'input-checkbox',
                    description: 'Pick one or more items from multiple options',
                    icon: "input-checkbox-icon",
                    height: "23.893",
                    width: "23.893"
                }
            ]
        }
    },
    methods: {}
}
</script>
