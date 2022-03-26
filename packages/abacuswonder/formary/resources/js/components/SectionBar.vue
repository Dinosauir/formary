<template>
    <div class="section-bar">
        <card header="Short Answer Text">
            <template #header>
                <h1>Short Answer Text</h1>
            </template>

            <template #body>
                <section-input #logo name="Short Answer Text" description="For short answers like name, address, ...">
                    <input-checkbox-icon color="#40BB48" height="23.893" width="23.893"></input-checkbox-icon>
                </section-input>
                
                <section-input #logo name="Short Answer Text"
                               description="For short answers like name, address, ...">
                    <input-text-icon color="#40BB48" height="7.081" width="25.492"></input-text-icon>
                </section-input>
            </template>
        </card>
    </div>
</template>

<script>
export default {
    name: "SectionBar"
}
</script>

<style scoped>

</style>
