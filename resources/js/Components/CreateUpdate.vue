<template>
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800">Create a Update</h1>
            <br>
            <form  enctype="multipart/form-data">
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
                <input type="file" class="form-control mt-5" v-on:change="onImageChange">
                <br>
                <button
                    @click="submitUpdate()"
                    type="button"
                    class="rounded-2xl bg-blue-800 shadow-md p-3 my-1 w-2/6 text-white mt-5">
                    Add Update
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
            title:null,
            content:null,
            image: null,
        }
    },
    methods: {
        submitUpdate(event) {
            const data = new FormData();
            data.append('title', this.title);
            data.append('content', this.content);
            data.append('image', this.image);

            axios.post('http://localhost/api/updates', data)
                .then((results) => {
                    console.log(results);
                    this.title = null;
                    this.content = null;
                    this.image = null;
                });
        },
        onImageChange(e){
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
        },
    }
}
</script>

<style scoped>

</style>