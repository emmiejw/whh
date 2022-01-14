<template>
    <div>
        <section id="testimonials" class=" py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <div v-for="testimonial in testimonials" class="inline-flex">
                     <div class="quote" >
                         <span class="qmark qleft">❝</span>
                         <blockquote>
                             {{ testimonial.comment }}
                             <br><br>
                             <footer><small>{{ testimonial.name }}</small></footer>
                         </blockquote>
                         <span class="qmark qright">❞</span>
                     </div>
                 </div>
            </div>
            <div>
                <a class="text-center text-blue-800" href="">View more Reviews</a>
                <br>
                <br>

                <button
                    @click="showModal"
                    class="gradient rounded text-white font-bold py-2 px-4 rounded-full">
                    Submit a Review
                </button>
            </div>
        </section>
        <Modal v-show="isModalVisible" @close="closeModal">
            <template v-slot:header>
                <h1 class="font-bold text-xl text-blue-800">Tell us how we are doing!</h1>
            </template>

            <template v-slot:body>
                <label class="text-xl text-blue-800">Name:</label>
                <input
                    type="text"
                    v-model="reviewsName"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                />
                <label class="text-xl text-blue-800">Email Address:</label>
                <input
                    type="email"
                    v-model="reviewsEmail"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                />
                <label class="text-xl text-blue-800">Comments:</label>
                <textarea
                    id="review"
                    v-model="reviewsComment"
                    class="rounded-2xl w-full p-3 my-1 shadow-md outline-none text-blue-800"
                />
                <button
                    type="button"
                    class="rounded-2xl bg-blue-800 shadow-md p-3 my-1 w-full text-white"
                    @click="submitTestimonial"
                >
                    Submit
                </button>
            </template>
        </Modal>
    </div>
</template>

<script>

import axios from 'axios';
import Modal from "@/Components/Modal";

export default {
    components: {Modal},
    data() {
        return {
            testimonials:Array,
            isModalVisible: false,
            reviewsName:null,
            reviewsEmail:null,
            reviewsComment:null,

        }
    },
    created() {
        axios.get(`http://localhost/api/testimonials/`)
            .then(response => {
                this.testimonials = response.data
            })
            .catch(e => {
                this.errors.push(e)
            })
    },
    methods: {
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
        submitTestimonial() {
            axios.post('http://localhost/api/testimonials/', {
                name: this.reviewsName,
                email: this.reviewsEmail,
                comment: this.reviewsComment,
                })
                .then((results) => {
                    this.closeModal();
                });
        },
    }
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
#testimonials {
    background: #fff;
    border-radius: 4px;
    padding: 10px;
    transition: all 0.2s;
    text-align: center;
    margin-top: -20px;
}
.quote{
    border-radius: 15px;
    border: 2px solid green;
    color: green;
    width: 320px;
    display: inline-block;
    margin: 0.8rem;
}
blockquote{
    padding-top: 2rem;
    font-size: calc(1rem + 0.5vmax);
    color: darkblue;
    margin: -1.5rem 0.5rem;
}
small{
    color: darkblue;
}
small:before{
    content: '\2014 ';
}
footer{
    text-align: center;
}
.qmark{
    font-size: 2rem;
    line-height: 3.2rem;
    border-radius: 50%;
    background-color: green;
    position: relative;
    width: 2.5rem;
    height: 2.5rem;
    color: white;
    text-align: center;
    display: inline-block;
}
.qleft{
    top: -1.2rem;
    left: -1.3rem;
    float: left;
    z-index: 0;
    position: relative;
}
.qright{
    right: -1.3rem;
    top: 1.1rem;
    float: right;
    z-index: 0;
    position: relative;
}
</style>