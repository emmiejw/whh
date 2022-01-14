<template>
    <div class="bg-white" id="updates">
        <div class="flex flex-wrap justify-between p-10 -mx-6">
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="http://localhost/images/lady.png" class="h-64 w-full rounded-t pb-6">
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Providing companionship to our lovely clients and peace of minds to their families!
                        </div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Here at Waterside Home Help one of our services we provide is to offer companionship to our clients. Whether this involves assistance and company around the home, assistance with shopping and errands or a trip out to a cafe or garden centre.

                            Many families are struggling to juggle the task of maintaining their jobs and homes and providing support to an elderly parent or relative too!

                            Let us help you make life easier!

                            Contact us for an informal chat and see how we can help!
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                    </div>
                </div>
            </div>


            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="http://localhost/images/dishwasher.jpg" class="h-64 w-full rounded-t pb-6">
                        <div class="w-full font-bold text-xl text-gray-900 px-6">Waterside Home Help Spring appliance check</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Appliance maintenance is very important too. We use these things every day and regular cleaning, checking and descaling of these appliances is vital. We have compiled a list of some of the maintenance required to keep your kitchen appliances in great, clean working order!

                            Degrease any areas around the cooker and backsplash and deep clean the oven.

                            Thoroughly clean the microwave- make sure the roof of the inside of the microwave is cleaned. This area is often missed.

                            Descale the kettle and coffee machine

                            Clean the filter of cooker extractor fan
                        </p>
                        <p v-if="active" class="text-gray-800 font-serif text-base px-6 mb-5">
                            Defrost the freezer, checking for out of date items and ensuring foods are labeled.

                            Thoroughly clean the fridge ensuring seals are cleaned and all opened foods are stored correctly and labeled.

                            Top up salt and rinse aid in the dishwasher and clean filter, edges and seals and inspect for damage.

                            Use a descaling treatment on your dishwasher such as Care + Protect 3 in 1 limescale treatment. Treat your washing machine at the same time.

                            Check drains and plugs are free of debris and running well.

                            TOP TIP. Place a bowl of water and a splash of vinegar or half a lemon in the microwave and cook until it is bubbling. Then leave for a few minutes to cool down and wipe. This makes cleaning so much easier.

                            TOP TIP. check the carbon monoxide detector and smoke detector while you are doing your spring clean- your elderly friends and neighbours may struggle to make this monthly check.
                        </p>
                        <button
                            v-if="!active"
                            @click="active = !active"
                            type="button"
                            class="rounded-2xl gradient shadow-md p-3 my-1 w-4/6 mx-auto text-white"
                        >
                            Read More
                        </button>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                    </div>
                </div>
            </div>

            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOZBV8snt5WVF9-Z5O7WjR3RGNtyLY1JdTxfQsq=w600-h0" class="h-64 w-full rounded-t pb-6">
                        <div class="w-full  font-bold text-xl text-gray-900 px-6">Spring Vegetable Risotto Recipe</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            Risotto of any kind is a great meal prep idea and can be eaten with vegetables or a soft bread roll. This recipe makes approximately 8 portions. I have chosen this particular risotto to feature as it is so colourful and nutritious. It is perfect for spring and summer as a lighter meal.

                            2 stock cubes
                            2 tbsp olive oil
                            1 large onion
                            Half a red pepper and half a yellow one
                            350g risotto rice
                            150ml of white wine
                            1 carrot, finely diced
                            Handful of broad beans (tinned or frozen are fine)
                            1 courgette, finely diced
                            Packet of asparagus tips
                            Handful of peas
                            100g parmesan
                            Butter to add at end (optional)

                            Method

                            Begin by heating the olive oil in a large, deep wok then cook off the onion and peppers until soft. Prepare 1 litre of stock.
                            Pour the risotto rice in and add approximately 150ml of stock and the wine. Bring to the boil and stir until absorbed. If I am preparing this risotto to be softer then I put the remaining vegetables, excluding the peas, in with some more stock at this point.
                            Keep gradually adding stock until the risotto rice is tender.
                            Then add the peas and parmesan and stir.
                            You can exchange the vegetables for any, but ensure that when cooking for seniors who struggle with chewing or swallowing they are cut no larger than the size of your thumbnail as a general rule and that they are well cooked.
                        </p>
                    </a>
                </div>
                <button
                    v-if="!active"
                    @click="active = !active"
                    type="button"
                    class="rounded-2xl gradient shadow-md p-3 my-1 w-4/6 mx-auto text-white"
                >
                    Read More
                </button>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            active:false,
        }
    }
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
</style>