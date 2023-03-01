<template>
    <div>
        <section id="testimonials" class="py-10">
            <h3 class="text-3xl text-gray-800 font-bold leading-none m-3">
                What Do Our Clients Think Of Us?
            </h3>
            <div class="relative slide">
                <div class="carousel-inner relative overflow-hidden w-full">
                    <div v-for="(testimonial, i) in testimonials" :id="`slide-${i}`" :key="i" :class="`${active === i ? 'active' : 'left-full'}`" class="carousel-item inset-0 relative w-full transform transition-all duration-500 ease-in-out">
                        <div class="quote" >
                            <span class="qmark qleft">❝</span>
                            <blockquote>
                                <div v-html="testimonial.comment"></div>
                                <br><br>
                                <footer><small>{{ testimonial.name }}</small></footer>
                            </blockquote>
                            <span class="qmark qright">❞</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
            active: 0

        }
    },

    created() {
        axios.get(`/api/testimonials/`)
            .then(response => {
                this.testimonials = response.data
            })
            .catch(e => {
                this.errors.push(e)
            })
    },
    mounted() {
        let i = 0;
        setInterval(() => {
            if (i > this.testimonials.length - 1) {
                i = 0;
            }
            this.active = i;
            i++;
        }, 5000);
    },
        methods: {
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
        submitTestimonial() {
            axios.post('/api/testimonials/', {
                name: this.reviewsName,
                email: this.reviewsEmail,
                comment: this.reviewsComment,
                })
                .then((results) => {
                    this.closeModal();
                    this.name = null;
                    this.email = null;
                    this.comment = null;
                });
        },

    }
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
.left-full {
    left: -100%;
}

.carousel-item {
    float: left;
    position: relative;
    display: block;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
}

.carousel-item.active {
    left: 0;
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
    width: 70%;
    display: inline-block;
    margin: 40px;
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
