<template>
    <div>
        <section class="bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <img src="../Pages/images/original_logo.png" alt="" class="w-full h-full object-center object-cover">
                <div id="aboutus" class="flex flex-wrap flex-col-reverse sm:flex-row">
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <img src="../Pages/images/kitchen.jpg" alt="">
                    </div>
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <div class="align-middle">
                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                               About Us
                            </h3>
                            <p class="text-gray-600 mb-8">
                                We offer household services such as <b>Cleaning and Assistance with Laundry, Grocery Shopping, Meal Preparation and Transport to and from appointments.</b>
                                <br><br>
                                We also provide <b>Companionship and Welfare checks</b>.
                                <br><br>
                                We offer a <b>Sitting Service</b> to allow respite and provide reassurance for the family and friends of our customers.
                                <br><br>
                                We also provide a dog walking services for furry friends.
                                <br><br>
                                We guarantee a specific time for each and every visit and the same helper will visit you each time.
                                <br><br>
                                We can arrange an initial visit to come and discuss your individual requirements and to introduce ourselves. Putting a face to the name really helps to reassure our clients. We understand that it can be difficult adjusting to the idea of having someone come into your home and we want to ensure the process is as smooth and stress free as possible.
                                <br><br>
                                We do not provide personal care and therefore our rates are significantly lower than the cost of having a carer visit.
                                <br><br>
                                Our carefully picked helpers all have experience in Social Care. They are fully trained, insured and hold enhanced DBS checks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <Line></Line>
        </section>
    </div>
</template>

<script>
import Staff from './Staff';
import Highlights from "@/Components/Highlights";
import Line from './Line';

export default {
    components: {
        Staff,
        Highlights,
        Line
    }
}
</script>

<style scoped>

</style>
