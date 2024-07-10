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
                    <FacebookFeed pageUrl="https://www.facebook.com/watersidehomehelp/" />
                </div>
            </div>
    </section>
</template>

<script>
import axios from "axios";
import FacebookFeed from "@/Components/FacebookFeed.vue";


export default {
    components: {
        FacebookFeed,
    },
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
