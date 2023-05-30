<template>
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800 text-center font-bold">Add a Staff Member</h1>
            <br>
            <form enctype="multipart/form-data">
                <label class="text-xl text-blue-800">Name:</label>
                <input
                    type="text"
                    v-model="name"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                />
                <label class="text-xl text-blue-800">Description:</label>
                <br>
                <textarea class="rounded-2xl w-full p-3 my-1 shadow-md text-blue-800" v-model="description" contenteditable="true" @blur="updateDescription" v-html="description"></textarea>
                <input type="file" class="form-control mt-5" v-on:change="onImageChange">
                <br>
                <button
                    @click="submitStaffMember()"
                    type="button"
                    class="gradient font-bold rounded-2xl shadow-md p-3 my-1 w-2/6 text-white mt-5">
                    Add Staff Member
                </button>
            </form>
            <h1 class="text-xl text-blue-800 my-2 text-center font-bold">All Staff Members</h1>
            <table class="table-auto border-2 border-green-800 p-2">
                <thead>
                <tr class="table-auto border-2 border-green-800 p-2">
                    <td class="table-auto border-2 border-green-800 p-2">Name</td>
                    <td class="table-auto border-2 border-green-800 p-2">Description</td>
                    <td class="table-auto border-2 border-green-800 p-2"></td>
                </tr>
                </thead>
                <tbody>
                <tr class="table-auto border-2 border-green-800 p-2" v-for="member in members" :key="member.id">
                    <td class="table-auto border-2 border-green-800 p-2" v-html="member.name"></td>
                    <td class="table-auto border-2 border-green-800 p-2" v-html="member.description"></td>
                    <td class="table-auto border-2 border-green-800 p-2">
                        <button @click="deleteMember(member)" class="gradient mx-auto lg:mx-0 hover:underline bg-white text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Delete
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import CKEditor from '@ckeditor/ckeditor5-vue';

export default {
    components: {CKEditor},
    data() {
        return {
            name: '',
            description: "",
            image: '',
            members: '',
        }
    },
    methods: {
        updateDescription(event) {
            this.description = event.target.innerHTML
        },
        onImageChange(e){
            this.image = e.target.files[0];
        },
        submitStaffMember() {
            console.log('here');
            const data = new FormData();
            console.log(this.name);
            console.log(this.description);
            console.log(this.image);
            data.append('name', this.name);
            data.append('description', this.description);
            if(this.image) {
                data.append('image', this.image);
            }

            const config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    'Access-Control-Allow-Origin': 'localhost:82, watersidehomehelp.uk'
                }
            }

            axios.post('/api/staff-members', data, config)
                .then((results) => {
                    console.log(results);
                    this.name = null;
                    this.description = null;
                    if (this.image) {
                        this.image = null;
                    }
                }).catch(error => {
                console.error("An error occurred:", error);
            });
        },
        getAllStaffMembers() {
            const config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    'Access-Control-Allow-Origin': 'localhost:82, watersidehomehelp.uk'
                }
            }
                axios.get('/api/staff-members', config)
                    .then(response => {
                        this.members = response.data;
                    })
                    .catch(error => {
                        console.log(error.data());
                    });
        },
        deleteMember(member) {
            axios.delete(`/api/staff-members/${member.id}`)
                .then(() => {
                    this.members = this.members.filter(m => m.id !== member.id);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.getAllStaffMembers();
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
