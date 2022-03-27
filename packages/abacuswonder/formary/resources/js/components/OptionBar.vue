<template>
  <div class="option-bar">
    <card>
            <template #header>
                <h1>{{ header }}</h1>
            </template>

            <template #body>
            </template>
        </card>
  </div>
</template>

<script>
export default {
    props: {
        header: String,
    }
}
</script>
