<template>
    <div id="gallery">
        <section class="overflow-hidden">
            <div class="container px-5  pb-10 py-5 mx-auto lg:pb-14 lg:pt-14 lg:px-20">
                <div class="flex flex-wrap -m-1 md:-m-2">
                    <div class="flex flex-wrap w-1/2">
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                 src="http://localhost/images/dishwasher.jpg">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                 src="http://localhost/images/dementia.jpg">
                        </div>
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                 src="http://localhost/images/lady.png">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                 src="https://media.istockphoto.com/photos/shot-of-an-attractive-young-nurse-sitting-and-bonding-with-her-senior-picture-id1316738511?k=20&m=1316738511&s=612x612&w=0&h=ybPysIn2Q8WtlvrtIuoM3nUkBtjiKqzw6GN20TTkngs=">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                 src="http://localhost/images/lady2.png">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                 src="http://localhost/images/man.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>

export default {
    data: () => ({
        images: [
            'http://localhost/images/dishwasher.jpg',
            'http://localhost/images/lady.png',
            'http://localhost/images/man.jpg',
            'http://localhost/images/lady3.jpg',
        ],
        active: 0
    }),
    mounted() {
        let i = 0;
        setInterval(() => {
            if (i > this.images.length - 1) {
                i = 0;
            }
            this.active = i;
            i++;
        }, 3000);
    }
}
</script>

<style scoped>
.left-full {
    left: -100%;
}

.carousel-item {
    float: left;
    position: relative;
    display: block;
    width: 100%;
    margin-right: -100%;
    backface-visibility: hidden;
}

.carousel-item.active {
    left: 0;
}

</style>