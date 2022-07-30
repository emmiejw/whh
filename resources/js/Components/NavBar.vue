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
                <a onclick=""
                   class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#aboutus">About Us</a>
                <a onclick=""
                   class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#staff">Our Staff</a>
                <a onclick=""
                   class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#gallery">Gallery</a>
                <a onclick=""
                   class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#services">Our Services</a>
                <a onclick=""
                   class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#testimonials">Testimonials</a>
                <a onclick=""
                   class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#updates">Updates</a>
                <a onclick=""
                   class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#contact">Contact Us</a>
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
            :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
            class="transform top-0 left-0 w-64 gradient fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30"
        >
      <span
          class="flex w-full items-center p-4 border-b"
          @click="isOpen = false"
      > Waterside Home Help

      </span>
            <span
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
                @click="isOpen = false"><span class="mr-2">
            </span>
                <a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#aboutus"
                   onclick="">About Us</a>
            </span>
            <span
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
                @click="isOpen = false"><span class="mr-2">
        </span>
                <a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#staff"
                   onclick="">Our Staff</a>
            </span>
            <span
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
                @click="isOpen = false"
            ><span class="mr-2">
        </span>
                <a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#gallery"
                   onclick="">Gallery</a>
        </span>
            <span
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
                @click="isOpen = false"><span class="mr-2">
            </span>
                <a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800"
                   href="#services"
                   onclick="">Our Services</a>
            </span>
            <span
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
                @click="isOpen = false"
            ><span class="mr-2">
        </span>
            <a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#testimonials"
               onclick="">Testimonials</a>
            </span>
            <span
                class="flex items-center p-4 hover:bg-green-800 hover:text-white "
                @click="isOpen = false"
            ><span class="mr-2">
        </span>
            <a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#updates"
               onclick="">Updates</a>
            </span>
            <span
                class="flex items-center p-4 hover:bg-green-800 hover:text-white"
                @click="isOpen = false"><span class="mr-2">
        </span>
            <a class="md:px-4 py-2 md:py-4 px-0 block text-green-100 hover:text-white md:hover:bg-gray-800" href="#contact"
               onclick="">Contact Us</a>
            </span>
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