<template>
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800">Create a Update</h1>
            <br>
            <label class="text-xl text-blue-800">Title:</label>
            <input
                type="text"
                v-model="title"
                class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
            />

            <label class="text-xl text-blue-800">Content:</label>
            <textarea
                id="review"
                v-model="content"
                class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
            />
            <button
                type="button"
                class="rounded-2xl bg-blue-800 shadow-md p-3 my-1 w-2/6 text-white"
                @click="submitUpdate"
            >
                Add Update
            </button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            title:null,
            content:null
        }
    },
    methods: {
        submitUpdate() {
            axios.post('http://localhost/api/updates/', {
                title: this.title,
                content: this.content,
            })
                .then((results) => {
                    console.log(results);
                });
        },
        updateDetails() {

        },
    }
}
</script>

<style scoped>

</style>