<style>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
</style>

<template>
    <div class="h-screen bg-background_dark text-text_white">
        <br><br>
        <div class="w-[95%] mx-auto bg-gradient-to-r from-main_blue to-light_blue rounded-lg">
            <h2 class="text-2xl text-center font-Title"> {{ program.name }} </h2>
            <div class="bg-[#131313]/50 w-full ">
                <div v-for="training in program.trainings" class="">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img :src="training.exercises[0].icon_url" class="w-6 h-6 mr-2">
                            <p class="inline">{{ training.name }}</p>
                        </div>
                        <p class="inline">{{ training.exercises.length }} exercices</p>
                        <p class="inline">{{ training.exercises.reduce((total, exercise) => total + exercise.sets.length, 0) }}
                            sets</p>
                    </div>
                    <hr v-if="trainingIndex !== program.trainings.length - 1" class="h-px my-8 w-full bg-[#CCCCCC]/75 rounded">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['programs', 'exercises', 'sets', 'trainings', 'program'],

    methods: {
    }
};
</script>
