<template>
    <div class="lg:flex xl:flex sm:flex-none justify-center items-center">
        <div class="w-full md:w-max md:my-8 my-0 fixed z-50">
            <nav class="rounded-none sm:rounded-lg lg:px-16 px-8 gradient shadow-md py-4 md:py-0 sm:sticky top-0 mt-10" >
                <div class="container mx-auto flex flex-wrap items-center">
                    <div class="flex-1 flex justify-between items-center">
                        <a href="" class="text-xl font-semibold text-green-100 hover:text-white tracking-normal">Waterside Home Help</a>
                    </div>

                    <label for="menu-toggle" class="pointer-cursor md:hidden block">
                        <svg class="fill-current text-gray-300 hover:text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 20 20">
                            <title>menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </label>
                    <input class="hidden" type="checkbox" id="menu-toggle" />

                    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
                        <nav>
                            <ul class="md:flex items-center justify-between text-base pt-4 md:pt-0">
                                <li><a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#staff">Our Staff</a></li>
                                <li><a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#services">Our Services</a></li>
                                <li><a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#gallery">Gallery</a></li>
                                <li><a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#testimonials">Testimonials</a></li>
                                <li><a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#updates">Updates</a></li>
                                <li><a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>

import Hero from "@/Components/Hero";
export default {
    components: {Hero},
    data() {
        return {
            open: false,
        }
    },
    methods: {
        toggle() {
            this.open = !this.open
        }
    }
}
</script>


<style scoped>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
#menu-toggle:checked + #menu {
    display: block;
}

.dropdown:hover .dropdown-menu,
.dropdown:active .dropdown-menu {
    display: block;
}



</style>

