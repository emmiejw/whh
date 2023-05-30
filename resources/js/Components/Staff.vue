<template>
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <div class="m-4">
                <h3 class="text-center text-3xl text-gray-800 font-bold leading-none mb-3">
                    Our Staff
                </h3>
                <p class="text-gray-600 mb-8">
                    We have a wonderful team of helpers here at Waterside Home Help Limited. All of our helpers are fully trained, insured, and hold enhanced DBS checks.
                    <br />
                    Our staff all wear uniforms, which we find ensures they are easily recognizable to our clients.
                </p>
            </div>
            <Line></Line>
            <div class="flex flex-wrap">
                <div v-for="member in members" :key="member.id" class="w-full sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        {{ member.name }}
                    </h3>
                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">
                        <img class="rounded-t-lg sm:h-52 lg:h-80 xl:h-96 w-full mt-3" v-bind:src="'/images/' + member.image" alt="">
                    </div>
                    <p class="text-gray-600 mb-4" v-html="member.description">
                    </p>
                </div>
            </div>
            <Line></Line>
        </div>
    </section>
</template>

<script>
import Line from "./Line";
import axios from "axios";
export default {
    name: "Staff",
    components: { Line },
    data() {
        return {
            members: null,
        };
    },
    created() {
        axios.get(`/api/staff-members`)
            .then(response => {
                console.log(response.data);
                this.members = response.data;
            })
            .catch(e => {
                this.errors.push(e);
            });
    },
    methods: {
        getImageUrl(filename) {
            return process.env.BASE_URL + 'images/' + filename;
        }
    }
};
</script>

<style scoped>
.ruth {
    top: -1rem;
    /*left: -1.3rem;*/
    float: left;
    z-index: 0;
    position: relative;
}

.anita {
    right: -1.3rem;
    top: 3rem;
    float: right;
    z-index: 0;
    position: relative;
}
</style>
