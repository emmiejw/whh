<template>
    <div>
        <section class="bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
                <img src="../Pages/images/original_logo.png" alt="" class="w-full h-full object-center object-cover">
                <div id="services" class="flex flex-wrap flex-col-reverse sm:flex-row">
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <img src="../Pages/images/kitchen.jpg" alt="">
                    </div>
                    <div class="w-full sm:w-1/2 p-6 mt-6">
                        <div class="align-middle">
                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                Our Services
                            </h3>
                            <p class="text-gray-600 mb-8">
                                We offer household services such as <b>Cleaning and Assistance with Laundry, Grocery Shopping, Meal Preparation and Transport to and from appointments</b>.
                                <br><br>
                                We also provide <b>Companionship and Welfare checks</b>.
                                <br><br>
                                We offer a <b>Sitting Service</b> to allow respite and provide reassurance for the family and friends of our customers.
                                <br><br>
                                We guarantee a specific time for each and every visit and the same helper will visit you each time.
                                <br><br>
                                We do not provide personal care and therefore our rates are significantly lower than the cost of having a carer visit.
                                <br><br>
                                Our hourly rates are from <b>£15 per hour</b> and you can change or stop your visits at any time.
                            </p>
                        </div>
                    </div>
                    <div class="w-full mb-4" id="staff">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-5/6 sm:w-1/2 p-6">
                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                Our Staff
                            </h3>
                            <p class="text-gray-600 mb-8">
                                Our carefully picked helpers all have experience in Social Care. They are fully trained, insured and DBS checked.
                                <br />
                                To find out more about our helpers please click on their image.
                            </p>
                        </div>
                        <Staff></Staff>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Staff from './Staff';
export default {
    components: {
        Staff
    }
}
</script>

<style scoped>

</style>