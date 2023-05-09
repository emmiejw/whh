<template>
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <div class="m-4">
                <h3 class="text-center text-3xl text-gray-800 font-bold leading-none mb-3">
                    Our Staff
                </h3>
                <p class="text-gray-600 mb-8">
                    We have a wonderful team of helpers here at Waterside Home Help Limited. All of our helpers are  fully trained, insured and hold enhanced DBS checks.
                    <br />
                    Our staff all wear uniforms, which we find ensures they are easily recognisable to our clients.

                </p>
            </div>
            <Line></Line>

            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Lara
                    </h3>
                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">
                        <img class="rounded-lg" src="../Pages/images/staff1.jpeg" alt="">
                    </div>
                    <p class="text-gray-600 mb-4">
                        Details about Lara coming soon ....
                    </p>
                </div>
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Wendy
                    </h3>
                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">
                        <img class="rounded-lg" src="../Pages/images/staff2.jpeg" alt="">
                    </div>
                    <p class="text-gray-600 mb-4">
                        Details about Wendy coming soon ....
                    </p>
                </div>
                <Line></Line>
                <div class="w-full sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Liz
                    </h3>
                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">
                        <img class="rounded-lg" src="../Pages/images/liz.jpeg" alt="">
                    </div>
                    <p class="text-gray-600 mb-4">
                        Details about Liz coming soon ....
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Line from "./Line";
export default {
    name: "Staff",
    components: { Line}
}
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
