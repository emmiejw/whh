<template>
<div id="services">
    <section class="bg-white border-b py-4">
        <div class="container max-w-5xl mx-auto m-8 text-center">
            <b class="text-2xl text-gray-800">Our Services</b><br><br>
            <div>
                <div class="mb-2 p-2 w-full flex flex-wrap gradient">
                    <div class="text-center  h-15 lg:h-40 border-8 w-1/6 p-2">
                        <img src="../Pages/images/coffee-128.png" alt="companionship" class="sm:w-16 sm:h-16 w-10 h-10 mx-auto my-auto animate-pulse">
                        <p class="hidden lg:block">Companionship</p>
                    </div>
                    <div class="text-center h-15 lg:h-40 border-8 w-1/6 p-2">
                        <img src="../Pages/images/cleaning.png" alt="cleaning" class="sm:w-16 sm:h-16 w-10 h-10 mx-auto my-auto animate-pulse">
                        <p class="hidden lg:block">Cleaning</p>
                    </div>
                    <div class="text-center h-15 lg:h-40 border-8 w-1/6 p-2">
                        <img src="../Pages/images/shopping.png" alt="shopping" class="sm:w-16 sm:h-16 w-10 h-10 mx-auto my-auto animate-pulse">
                        <p class="hidden lg:block">Grocery Shopping</p>
                    </div>
                    <div class="text-center h-15 lg:h-40 border-8 w-1/6 p-2">
                        <img src="../Pages/images/food.png" alt="meal prep" class="sm:w-16 sm:h-16 w-10 h-10 mx-auto my-auto animate-pulse">
                        <p class="hidden lg:block">Meal Preparation</p>
                    </div>
                    <div class="text-center h-15 lg:h-40 border-8 w-1/6 p-2">
                        <img src="../Pages/images/car.png" alt="transport" class="sm:w-16 sm:h-16 w-10 h-10 mx-auto my-auto animate-pulse">
                        <p class="hidden lg:block">Transport to and from appointments</p>
                    </div>
                    <div class="text-center h-15 lg:h-40 border-8 w-1/6 p-2">
                        <img src="../Pages/images/sitting.png" alt="sitting service" class="sm:w-16 sm:h-16 w-10 h-10 mx-auto my-auto animate-pulse">
                        <p class="hidden lg:block">Sitting Service</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
            <p class="text-center text-4xl font-bold text-gray-800 dark:text-white">
                Providing companionship to our lovely clients and peace of minds to their families!
            </p>
            <div class="container max-w-5xl mx-auto m-8">
                <div class="flex items-center flex-col md:flex-row justify evenly">
                    <div class="p-4">
                        <div class="text-center mb-4 opacity-90">
                            <a href="#" class="block relative">
                                <img alt="profil" src="../Pages/images/lady.png" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                            </a>
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-500 dark:text-gray-400 max-w-xs py-4 font-light">
                                Here at Waterside Home Help Limited one of our services we provide is to offer companionship to our clients. Whether this involves assistance and company around the home, assistance with shopping and errands or a trip out to a cafe or garden centre.
                                Many families are struggling to juggle the task of maintaining their jobs and homes and providing support to an elderly parent or relative too!
                            </p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="text-center mb-4 opacity-90">
                            <a href="#" class="block relative">
                                <img alt="couple" src="../Pages/images/lunch.jpg" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                            </a>
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-500 max-w-xs py-4 font-light">
                                For some of our clients we visit daily to ensure that they have a hot meal at lunch time while also preparing sandwiches or a lighter meal for later.
                            </p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="text-center mb-4 opacity-90">
                            <a href="#" class="block relative">
                                <img alt="profil" src="../Pages/images/alan.jpg" class="mx-auto object-cover rounded-full h-40 w-40 "/>
                            </a>
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-500 dark:text-gray-400 max-w-xs font-light">
                                Many of our clients live alone or have families who live far away from them. We provide companionship to these clients as well as peace of mind to their families. Whether it be a game of scrabble,  enjoying a jigsaw puzzle,  a cuppa and a chat or a trip out and about. We ensure that the client has regular company and something to look forward to each day or week.
                                A lot of the families we assist are finding that they are so busy when visiting their parents with cleaning, changing bed linen and all of the other tasks that their elderly family members are no longer able to do that they aren't actually spending quality time with them. This is where we step in and complete these tasks taking the pressure off the family.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</template>

<script>
export default {
    name: "Highlights"
}
</script>

<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}

p {
    font-weight: bold;
    font-size: 15px;
    margin-top: 15px;
}
</style>
