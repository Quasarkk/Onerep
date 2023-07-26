<style>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
</style>

<template>
    <div class="h-full bg-[#141721] text-text_gray/80">
        <div class="justify-center flex">
            <h2 class="text-2xl text-text_white font-Title my-2"> {{ training.name }} </h2>
        </div>
        <swiper :slidesPerView="1" :spaceBetween="30" :loop="true" :pagination="{ clickable: true, }" :modules="modules"
            class="h-[600px]">

            <swiper-slide v-for="exercise in training.exercises">
                <!-- CARD BACKGROUND GRADIENT -->
                <div class="bg-gradient-to-r from-main_blue to-light_blue rounded-lg mx-auto pt-8">
                    <!-- CARD DARK EXERCISE NAME + DETAILS -->
                    <div class="w-[90%] bg-[#131313]/70 flex rounded-tr-lg rounded-tl-lg mx-auto">
                        <div class="items-center flex w-1/5">
                            <div class="bg-text_white items-center flex justify-center h-[48px] w-[48px] rounded-tl-lg">
                                <img :src="exercise.icon_url" class="w-10 h-10 flex">
                            </div>
                        </div>

                        <!-- EXERCISE PROPERTIES -->
                        <div class="flex-col w-full">
                            <div class=" flex justify-center">
                                <p class="text-text_white">
                                    {{ exercise.name }}
                                </p>
                            </div>
                            <div class="flex justify-evenly">
                                <p class="mx-2 text-text_white"> {{ exercise.sets_number }} sets</p>
                                <p class="mx-2 text-text_white"> 1rm : {{ exercise.onerm }} kg </p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <!-- SETS PROPERTIES -->
                    <div class="h-screen w-[90%] mx-auto">
                        <div v-for="(setNumber, index) in exercise.sets_number" :key="setNumber">
                            <div :class="{
                                    'rounded-bl-lg': index === exercise.sets_number - 1,
                                    'rounded-br-lg': index === exercise.sets_number - 1,
                                    'bg-[#1E1E1E]/40 rounded my-4 flex justify-between items-center': true
                                }"
                                class="flex justify-between items-center w-full">
                                <div :class="{'rounded-bl-lg': index === exercise.sets_number - 1}" class="bg-text_white py-[0.8rem] w-6 text-center px-1 h-full">
                                    {{ setNumber }}
                                </div>
                                <EditButton :class="{'rounded-br-lg': index === exercise.sets_number - 1}" class="py-[0.64rem] px-3 bg-text_white"/>
                            </div>
                        </div>
                    </div>

                </div>

            </swiper-slide>
        </swiper>

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
import EditButton from '@/Components/EditButton.vue'

export default {
    props: ['training', 'exercise'],
    components: { Swiper, SwiperSlide, EditButton },

    setup() {
        return {
            modules: [Pagination, Navigation],
        };
    },
};
</script>
