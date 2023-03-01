<template>
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800">Create a Update</h1>
            <br>
            <form enctype="multipart/form-data">
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
                    class="gradient font-bold rounded-2xl shadow-md p-3 my-1 w-2/6 text-white mt-5">
                    Add Update
                </button>
            </form>
            <h1 class="text-xl text-blue-800 my-2">All Updates</h1>
            <table class="table-auto border-2 border-green-800 p-2">
               <thead>
                   <tr class="table-auto border-2 border-green-800 p-2">
                       <td class="table-auto border-2 border-green-800 p-2">Title</td>
                       <td class="table-auto border-2 border-green-800 p-2">Content</td>
                       <td class="table-auto border-2 border-green-800 p-2">Edit</td>
                   </tr>
               </thead>
               <tbody>
                   <tr class="table-auto border-2 border-green-800 p-2" v-for="update in updates">
                       <td class="table-auto border-2 border-green-800 p-2">{{ update.title }}</td>
                       <td class="table-auto border-2 border-green-800 p-2">{{ update.content }}</td>
                       <td class="table-auto border-2 border-green-800 p-2">
                           <a class="">
                               <button class="gradient mx-auto lg:mx-0 hover:underline bg-white text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                   <router-link: to="{name: 'edit', params: {id: update.id}}">
                                       Edit (not quite working yet)
                                   </router-link:>
                               </button>
                           </a>
                       </td>
                   </tr>
               </tbody>
           </table>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            title:null,
            content:null,
            image: null,
            updates:null
        }
    },
    methods: {
        submitUpdate(event) {
            const data = new FormData();
            data.append('title', this.title);
            data.append('content', this.content);
            if(this.image) {
                data.append('image', this.image);
            }

            const config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    'Access-Control-Allow-Origin': 'localhost:82, watersidehomehelp.uk'
                }
            }

            axios.post('/api/updates', data, config)
                .then((results) => {
                    console.log(results);
                    this.title = null;
                    this.content = null;
                    if (this.image) {
                        this.image = null;
                    }
                });
        },
        onImageChange(e){
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
        },

        getAllUpdates() {
            const config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    'Access-Control-Allow-Origin': 'localhost:82, watersidehomehelp.uk'
                }
            }
            axios.get('/api/updates', config)
            .then((results) => {
               this.updates = results.data
            });
        },
    },
    mounted() {
        this.getAllUpdates();
    }
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
</style>
