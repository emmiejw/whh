<!--<template>-->
<!--    <div class="lg:flex xl:flex sm:flex-none justify-center items-center">-->
<!--        <div class="w-full md:w-max md:my-8 my-0 fixed z-50">-->
<!--            <nav class="rounded-none sm:rounded-lg lg:px-16 px-8 gradient shadow-md py-4 md:py-0 sm:sticky top-0 mt-2" >-->
<!--                <div class="container mx-auto flex flex-wrap items-center">-->
<!--                    <div class="flex-1 flex justify-between items-center">-->
<!--                        <a href="" class="text-xl font-semibold text-green-100 hover:text-white tracking-normal">Waterside Home Help</a>-->
<!--                    </div>-->

<!--                    <label for="menu-toggle" class="pointer-cursor md:hidden block">-->
<!--                        <svg class="fill-current text-gray-300 hover:text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20"-->
<!--                             viewBox="0 0 20 20">-->
<!--                            <title>menu</title>-->
<!--                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>-->
<!--                        </svg>-->
<!--                    </label>-->
<!--                    <input class="hidden" type="checkbox" id="menu-toggle" />-->

<!--                    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">-->
<!--                        <nav>-->
<!--                            <ul class="md:flex items-center justify-between text-base pt-4 md:pt-0">-->
<!--                                <li><a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#staff">Our Staff</a></li>-->
<!--                                <li><a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#services">Our Services</a></li>-->
<!--                                <li><a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#gallery">Gallery</a></li>-->
<!--                                <li><a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#testimonials">Testimonials</a></li>-->
<!--                                <li><a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#updates">Updates</a></li>-->
<!--                                <li><a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#contact">Contact Us</a></li>-->
<!--                            </ul>-->
<!--                        </nav>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->

<!--import Hero from "@/Components/Hero";-->
<!--export default {-->
<!--    components: {Hero},-->
<!--    data() {-->
<!--        return {-->
<!--            open: false,-->
<!--        }-->
<!--    },-->
<!--    methods: {-->
<!--        toggle() {-->
<!--            this.open = !this.open-->
<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->


<!--<style scoped>-->
<!--.gradient {-->
<!--    background: linear-gradient(90deg, blue 0%, green 100%);-->
<!--}-->
<!--#menu-toggle:checked + #menu {-->
<!--    display: block;-->
<!--}-->

<!--.dropdown:hover .dropdown-menu,-->
<!--.dropdown:active .dropdown-menu {-->
<!--    display: block;-->
<!--}-->



<!--</style>-->

<template>
    <nav
        class="flex fixed w-full items-center justify-between px-6 h-16 gradient text-white border-b border-gray-200 z-10"
    >
        <div class="flex items-center">
            <button class="mr-2" aria-label="Open Menu" @click="drawer">
                <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    class="w-8 h-8"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
           Waterside Home Help
        </div>
        <div class="flex items-center">
            <div class="hidden md:block md:flex md:justify-between md:bg-transparent">
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#staff">Our Staff</a>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#services">Our Services</a>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#gallery">Gallery</a>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#testimonials">Testimonials</a>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#updates">Updates</a>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#contact">Contact Us</a>
            </div>
        </div>

        <transition
            enter-class="opacity-0"
            enter-active-class="ease-out transition-medium"
            enter-to-class="opacity-100"
            leave-class="opacity-100"
            leave-active-class="ease-out transition-medium"
            leave-to-class="opacity-0"
        >
            <div
                @keydown.esc="isOpen = false"
                v-show="isOpen"
                class="z-10 fixed inset-0 transition-opacity"
            >
                <div
                    @click="isOpen = false"
                    class="absolute inset-0 bg-black opacity-50"
                    tabindex="0"
                ></div>
            </div>
        </transition>
        <aside
            class="transform top-0 left-0 w-64 gradient fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30"
            :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
        >
      <span
          @click="isOpen = false"
          class="flex w-full items-center p-4 border-b"
      > Waterside Home Help

      </span>
            <span
                @click="isOpen = false"
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
            ><span class="mr-2">
        </span>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#services">Our Staff</a>
            </span
            >
            <span
                @click="isOpen = false"
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
            ><span class="mr-2">
        </span>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#staff">Our Services</a>
            </span
            >
            <span
                @click="isOpen = false"
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
            ><span class="mr-2">
        </span>
                <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#gallery">Gallery</a>
</span
            >
            <span
                @click="isOpen = false"
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
            ><span class="mr-2">
        </span>
            <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#testimonials">Testimonials</a>


            </span
            >
            <span
                @click="isOpen = false"
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
            ><span class="mr-2">
        </span>
            <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#updates">Updates</a>
</span
            >
            <span
                @click="isOpen = false"
                class="flex items-center p-4 hover:bg-green-800 hover:text-white"
            ><span class="mr-2">
        </span>
            <a onclick="" class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#contact">Contact Us</a>
</span
            >
        </aside>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false
        };
    },
    methods: {
        drawer() {
            this.isOpen = !this.isOpen;
        }
    },
    watch: {
        isOpen: {
            immediate: true,
            handler(isOpen) {
                if (process.client) {
                    if (isOpen) document.body.style.setProperty("overflow", "hidden");
                    else document.body.style.removeProperty("overflow");
                }
            }
        }
    },
    mounted() {
        document.addEventListener("keydown", e => {
            if (e.keyCode == 27 && this.isOpen) this.isOpen = false;
        });
    }
};
</script>
<style>
.gradient {
    background: linear-gradient(90deg, blue 0%, green 100%);
}
</style>