<style>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
</style>

<template>
    <div class="h-screen bg-[#141721] text-text_gray/80">
        <div class="justify-around flex">
            <h2 class="text-2xl text-text_white font-Title my-2 flex"> {{ training.name }} </h2>
            <!-- ADD EXERCISE BUTTON -->
            <AddButton @click="OpenModal()" class="flex mx-0 py-2" />
        </div>
        <swiper :slidesPerView="1" :spaceBetween="30" :loop="true" :pagination="{ clickable: true, }" :modules="modules"
            class="h-[600px]">

            <swiper-slide v-for="exercise in training.exercises">
                <!-- CARD BACKGROUND GRADIENT -->
                <div class="bg-gradient-to-r from-main_blue to-light_blue rounded-lg mx-auto pt-8">
                    <!-- MODALE ADD EXERCISE -->
                    <div class="bg-slate-900/50 w-full h-full backdrop-blur-sm top-0 fixed z-50 flex items-center justify-center"
                        v-if="isOpen_add_exercise">
                        <div class=" bg-gradient-to-br from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md w-full">
                            <div class="justify-between ">
                                <select v-model="selectedExercise">
                                    <option :value="null">Select an existing exercise</option>
                                    <option v-for="exercise in exercises" :value="exercise">{{ exercise.name }}</option>
                                </select>
                                <button @click="console.log(exercises)">AAA</button>
                            </div>
                        </div>
                        <button @click="isOpen_add_exercise = false"
                            class="ml-auto mb-auto text-4xl text-red-700 ">X</button>
                    </div>
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
                            }" class="flex justify-between items-center w-full">
                                <div :class="{ 'rounded-bl-lg': index === exercise.sets_number - 1 }"
                                    class="bg-text_white py-[0.8rem] w-6 text-center px-1 h-full">
                                    {{ setNumber }}
                                </div>
                                <EditButton :class="{ 'rounded-br-lg': index === exercise.sets_number - 1 }"
                                    class="py-[0.64rem] px-3 bg-text_white" />
                            </div>
                        </div>
                        <AddButton @click="addSet(training, exercise)" class="" />
                    </div>



                </div>
            </swiper-slide>
        </swiper>
    </div>
    <Navbar />
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

import EditButton from '@/Components/Onerep/EditButton.vue';
import AddButton from '@/Components/Onerep/AddButton.vue';
import Navbar from '@/Components/Onerep/Navbar.vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

// import required modules
import { Pagination, Navigation } from 'swiper/modules';

export default {
    props: ['training', 'exercise', 'exercises',],
    components: { Swiper, SwiperSlide, EditButton, AddButton, Navbar },

    setup() {
        return {
            modules: [Pagination, Navigation],
        };
    },

    data() {
        return {
            isOpen_add_exercise: false,
        }
    },

    methods: {
        async addSet(training, exercise) {
            try {
                await this.$inertia.post(`/trainings/${training.id}/exercises/${exercise.id}/add-set`);
                exercise.sets_number++;
            } catch (error) {
                console.error('Error adding set:', error);
            }
        },

        // ADD EXERCISE OPEN MODAL
        OpenModal() {
            this.editMode = true;
            this.isOpen_add_exercise = true;
        },

        // CREATE EXERCISE
        // create2() {
        //     //Ajouter l'id du programme à la requete
        //     this.form_create.program_id = this.program.id;
        //     //Envoyer la requete
        //     this.$inertia.post('/trainings', this.form_create)
        // },


    },
}
</script>
