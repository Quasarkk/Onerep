<template>
    <!-- <swiper :slidesPerView="1" :spaceBetween="30" :loop="true" :pagination="{
        clickable: true,
    }" :navigation="true" :modules="modules" class="h-screen">
        <div v-for="training in program.trainings">
            <swiper-slide>Slide 1</swiper-slide>
        </div>

        <swiper-slide>Slide 2</swiper-slide>
        <swiper-slide>Slide 3</swiper-slide>
        <swiper-slide>Slide 4</swiper-slide>
        <swiper-slide>Slide 5</swiper-slide>
        <swiper-slide>Slide 6</swiper-slide>
        <swiper-slide>Slide 7</swiper-slide>
        <swiper-slide>Slide 8</swiper-slide>
        <swiper-slide>Slide 9</swiper-slide>
    </swiper> -->



    <div class="h-screen bg-[#141721] text-white">
        <h2 class="text-2xl text-center">Trainings</h2>
        <div class="w-10/12 mx-auto my-8">
            <div v-for="training in trainings">
                <p>{{ training.name }}</p>
                <p>{{ training.number }}</p>
                <p>{{ training.date }}</p>
                <p>{{ training.muscles }}</p>
            </div>
        </div>
    </div>
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// import required modules
import { Pagination, Navigation } from 'swiper/modules';

export default {
    props: ['trainings', 'program',],
    components: { Swiper, SwiperSlide,},

    setup() {
        return {
            modules: [Pagination, Navigation],
        };
    },
};
</script>
