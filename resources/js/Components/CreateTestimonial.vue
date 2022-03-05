<template>
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800">Create a Testimonial</h1>
            <br>
            <form  enctype="multipart/form-data">
                <label class="text-xl text-blue-800">Name:</label>
                <input
                    type="text"
                    v-model="reviewersName"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                />

                <label class="text-xl text-blue-800">Comment:</label>
                <textarea
                    v-model="reviewersComment"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                />
                <br>
                <button
                    @click="submitTestimonial"
                    type="button"
                    class="rounded-2xl bg-blue-800 shadow-md p-3 my-1 w-2/6 text-white">
                    Add Testimonial
                </button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
import EssentialsPlugin from '@ckeditor/ckeditor5-essentials/src/essentials';

export default {
    data() {
        return {
            reviewersName:null,
            reviewersEmail:null,
            reviewersComment:null,
        }
    },
    methods: {
        submitTestimonial() {
            axios.post('http://localhost/api/testimonials/', {
                name: this.reviewersName,
                email: this.reviewersEmail,
                comment: this.reviewersComment,
            })
                .then((results) => {
                    this.reviewersName = null;
                    this.reviewersEmail = null;
                    this.reviewersComment = null;
                });
        },
    }
}
</script>

<style scoped>

</style>