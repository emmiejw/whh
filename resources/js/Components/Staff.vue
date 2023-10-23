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
                        Ruth
                    </h3>
                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">
                        <img class="rounded-lg" src="../Pages/images/Ruth2.png" alt="">
                    </div>
                    <p class="text-gray-600 mb-4">
                        I am a mum to four children. 3 girls and a little boy. I’ve lived in the Waterside all of my life and have spent many years caring for people. My most recent job was as as a Senior Care Lead in a nursing home. Here I quickly realised how easily an elderly person can lose their independence due to age and illness. I've spent a lifetime looking after others, it's what I do best and what I am passionate about so being able to support people to continue to live their lives the way they want to, in their own homes is what makes me happy.
                        The pandemic changed the way we were able to care for our aging relatives and I realised there was a 'gap' in the care sector. Many people are able to cope independently with their personal care needs but need that extra bit of assistance with things like housework, changing bed linen, preparing meals, transport to appointments, shopping or just spending time playing games or chatting over a cup of tea.
                        So in March 2021 Waterside Home Help was born. Now 2 years on we have an amazing team of Helpers assisting our clients throughout the Waterside. We are a close team and I couldn't be prouder of how far we have come. It is abundantly apparent in the testimonials that our helpers make a massive difference to their clients lives and reading the information given by the helpers it is also apparent the affect the clients have on us.
                    </p>
                </div>
<!--                <div class="w-5/6 sm:w-1/2 p-6">-->
<!--                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">-->
<!--                        Wendy-->
<!--                    </h3>-->
<!--                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">-->
<!--                        <img class="rounded-lg" src="../Pages/images/staff2.jpeg" alt="">-->
<!--                    </div>-->
<!--                    <p class="text-gray-600 mb-4">-->
<!--                        Details about Wendy coming soon ....-->
<!--                    </p>-->
<!--                </div>-->
<!--                <Line></Line>-->
<!--                <div class="w-full sm:w-1/2 p-6">-->
<!--                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">-->
<!--                        Liz-->
<!--                    </h3>-->
<!--                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">-->
<!--                        <img class="rounded-lg" src="../Pages/images/liz.jpeg" alt="">-->
<!--                    </div>-->
<!--                    <p class="text-gray-600 mb-4">-->
<!--                        Details about Liz coming soon ....-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="w-full sm:w-1/2 p-6">-->
<!--                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">-->
<!--                        Lara-->
<!--                    </h3>-->
<!--                    <div class="w-full sm:w-1/2 p-6 rounded-lg float-right">-->
<!--                        <img class="rounded-lg" src="../Pages/images/staff1.jpeg" alt="">-->
<!--                    </div>-->
<!--                    <p class="text-gray-600 mb-4">-->
<!--                        Details about Lara coming soon ....-->
<!--                    </p>-->
<!--                </div>-->
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

