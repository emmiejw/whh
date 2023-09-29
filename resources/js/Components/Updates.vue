<template>
    <section class="overflow-hidden">
        <div id="updates" class=" gradient">
                <h3 class="text-3xl text-white font-bold leading-none m-7 text-center">
                    Updates
                </h3>
                <p class="text-xl text-white leading-none m-7 text-center">
                    "Keep up to date with useful information from the team here at Waterside Home Help Limited"
                </p>
                <div class="flow-root">
                    <ul role="list">
                        <li class="mb-4 m-auto" v-for="update in updates" v-bind:key="update.id">
                            <div @click="toggleItem(update)" class="m-auto w-5/6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <img class="rounded-t-lg sm:h-52 lg:h-80 mx-auto mt-3 object-center" v-bind:src="'/images/' + update.image" alt="">
                                <div class="icon">
                                    <svg v-if="!update.isVisible" class="w-6 h-6 dark:text-white m-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path></svg>
                                    <svg v-if="update.isVisible" class="w-6 h-6 dark:text-white m-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z"></path></svg>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-2 text-lg lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ update.title}}</h5>
                                    <p :class="update.isVisible ? activeClass : 'hidden'" class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify" v-html="update.content"></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            updates:null,
            isVisible: false,
            activeClass: 'is-visible'
        }
    },
    created() {
        axios.get(`/api/updates`)
            .then(response => {
                this.updates = response.data
                console.log(this.updates)
            })
            .catch(e => {
                this.errors.push(e)
            })
    },
    methods: {
        toggleItem(update) {
            update.isVisible = !update.isVisible;
            this.$forceUpdate();
        }
    }
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
.title {
    margin: 0;
    color: darkgreen;
    text-align: center;
    padding-bottom: 5px;
}
.content {
    text-align: left;
    color: black;
    padding: 10px;
}
.icon {
    color: darkgreen;
    float: right;
}
</style>
