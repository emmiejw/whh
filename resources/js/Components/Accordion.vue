<template>
    <div>
        <template>
            <div class="bg-white">
                <p class="text-gray-700">{{text}}</p>
                <button @click="toggleVisibility">Show details</button>
                <div class="details" v-show="isVisible">Some hidden details</div>
            </div>
        </template>
    </div>

</template>

<script>

export default {
    name: "Accordion",
    props: {
        text: String
    },
    data() {
        return {
            isVisible: false
        }
    },
    methods: {
        toggleVisibility() {
            this.isVisible = !this.isVisible
        }
    }
}
</script>

<style scoped>

</style>