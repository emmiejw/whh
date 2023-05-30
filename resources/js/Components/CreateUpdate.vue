<template>
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800 text-center font-bold">Create an Update</h1>
            <br>
            <form enctype="multipart/form-data">
                <label class="text-xl text-blue-800">Title:</label>
                <input
                    type="text"
                    v-model="title"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                />
                <br>
                <br>
                <img alt="gallery" class="block object-cover object-center w-1/2 h-1/2 rounded-lg"
                     src="../Pages/images/carbon.png">
                <br>
                <label class="text-xl text-blue-800">Content:</label>
                <br>
                <textarea class="rounded-2xl w-full p-3 my-1 shadow-md text-blue-800" v-model="content" contenteditable="true" @keydown.enter.prevent="insertLineBreak" @blur="updateContent" v-html="content"></textarea>

                <input type="file" class="form-control mt-5" v-on:change="onImageChange">
                <br>
                <button
                    @click="submitUpdate()"
                    type="button"
                    class="gradient font-bold rounded-2xl shadow-md p-3 my-1 w-2/6 text-white mt-5">
                    Add Update
                </button>
            </form>
            <h1 class="text-xl text-blue-800 my-2 text-center font-bold">All Updates</h1>
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
                       <td class="table-auto border-2 border-green-800 p-2" v-html="update.title"></td>
                       <td class="table-auto border-2 border-green-800 p-2" v-html="update.content"></td>
                       <td class="table-auto border-2 border-green-800 p-2">
                           <button @click="deleteUpdate(update)"  class="gradient mx-auto lg:mx-0 hover:underline bg-white text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                               Delete
                           </button>
                       </td>
                   </tr>
               </tbody>
           </table>
        </div>
        <Line></Line>
    </div>
</template>

<script>
import axios from "axios";
import Line from "@/Components/Line.vue";

export default {
    components: {Line},
    data() {
        return {
            update: {
                title:null,
                content: "",
                image: null
            },
            title:null,
            content: "",
            image: null,
            updates:null,
        }
    },
    methods: {
        insertLineBreak() {
            const range = document.createRange()
            const selection = window.getSelection()
            range.setStart(selection.anchorNode, selection.anchorOffset)
            range.setEnd(selection.anchorNode, selection.anchorOffset)
            range.insertNode(document.createElement('br'))
            range.setStartAfter(range.endContainer)
            range.setEndAfter(range.startContainer)
            selection.removeAllRanges()
            selection.addRange(range)
            this.updateContent()
        },
        createList() {
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
            // const range = document.createRange()
            // const selection = window.getSelection()
            // const list = document.createElement(listType)
            // const listItems = prompt("Enter list items separated by a newline:")
            // const items = listItems.split(/\r?\n/)
            // items.forEach(item => {
            //     const li = document.createElement('li')
            //     li.textContent = item.trim()
            //     list.appendChild(li)
            // })
            // range.setStart(selection.anchorNode, selection.anchorOffset)
            // range.setEnd(selection.anchorNode, selection.anchorOffset)
            // range.insertNode(list)
            // range.setStartAfter(range.endContainer)
            // range.setEndAfter(range.startContainer)
            // selection.removeAllRanges()
            // selection.addRange(range)
            // this.updateContent();
            console.log('created ');
        },
        updateContent(event) {
            this.content = event.target.innerHTML
        },
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
        deleteUpdate(update) {
            axios.delete(`/api/updates/${update.id}`)
                .then(() => {
                    this.updates = this.updates.filter(u => u.id !== update.id);
                })
                .catch(error => {
                    console.log(error);
                });
        },
    },
    mounted() {
        console.log('loaded');
        this.getAllUpdates();
        console.log('updates from mounted ' + this.updates);
    }
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
.editor {
    width: 100%;
}

.result_content {
    background-color: #7CFC00;
    margin-top: 50px;
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}
</style>
