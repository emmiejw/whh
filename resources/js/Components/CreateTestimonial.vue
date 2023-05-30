<template>
    <div>
        <div class="w-4/5 p-4 align-middle">
            <h1 class="text-xl text-blue-800 text-center font-bold">Create a Testimonial</h1>
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
                    class="rounded-2xl w-full p-3 my-1 shadow-md text-blue-800"
                />
                <br>
                <button
                    @click="submitTestimonial"
                    type="button"
                    class="gradient rounded-2xl bg-blue-800 shadow-md p-3 my-1 w-2/6 text-white">
                    Add Testimonial
                </button>
            </form>
        </div>
        <h1 class="text-xl text-blue-800 my-2 text-center font-bold">All Testimonials</h1>
        <table class="table-auto border-2 border-green-800 p-2">
            <thead>
            <tr class="table-auto border-2 border-green-800 p-2">
                <td class="table-auto border-2 border-green-800 p-2">Name</td>
                <td class="table-auto border-2 border-green-800 p-2">Content</td>
                <td class="table-auto border-2 border-green-800 p-2"></td>
            </tr>
            </thead>
            <tbody>
            <tr class="table-auto border-2 border-green-800 p-2" v-for="testimonial in testimonials" :key="testimonial.id">
                <td class="table-auto border-2 border-green-800 p-2" v-html="testimonial.name"></td>
                <td class="table-auto border-2 border-green-800 p-2" v-html="testimonial.comment"></td>
                <td class="table-auto border-2 border-green-800 p-2">
                    <button @click="deleteTestimonial(testimonial)"  class="gradient mx-auto lg:mx-0 hover:underline bg-white text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Delete
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
        <Line></Line>
    </div>
</template>

<script>
import axios from "axios";
import Line from "@/Components/Line.vue";
import testimonials from "@/Components/Testimonials.vue";

export default {
    components: { Line },
    computed: {
        testimonials() {
            return testimonials
        }
    },
    data() {
        return {
            testimonials:null,
            reviewersName:null,
            reviewersEmail:null,
            reviewersComment:null,
        }
    },
    methods: {
        getAllTestimonials() {
            const config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    'Access-Control-Allow-Origin': 'localhost:82, watersidehomehelp.uk'
                }
            }
            axios.get('/api/testimonials', config)
                .then(response => {
                    this.testimonials = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        submitTestimonial() {
            const config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    'Access-Control-Allow-Origin': 'localhost:82, watersidehomehelp.uk'
                }
            }
            axios.post('/api/testimonials', {
                name: this.reviewersName,
                email: this.reviewersEmail,
                comment: this.reviewersComment,
            }, config)
                .then((results) => {
                    this.reviewersName = null;
                    this.reviewersEmail = null;
                    this.reviewersComment = null;
                });
        },
        deleteTestimonial(testimonial) {
            axios.delete(`/api/testimonials/${testimonial.id}`)
                .then(() => {
                    this.testimonials = this.testimonials.filter(t => t.id !== testimonial.id);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.getAllTestimonials();
        console.log(this.testimonials);
    }
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
</style>
