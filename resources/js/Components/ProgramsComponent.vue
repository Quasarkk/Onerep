<style>
  @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
</style>

<template>
    <div class="h-screen bg-background_dark text-text_white">
        <h2 class="text-2xl text-center font-Title">Your programs :</h2>
        <div class="w-[95%] mx-auto my-8  ">
            <div v-for="(program, programIndex) in programs" class="bg-gradient-to-r from-main_blue to-light_blue p-2 my-4 rounded-lg">
                <h2 class="text-center text-xl font-Title tracking-wide -mx-2 my-2 rounded-tl-md rounded-tr-md text-text_white">{{ program.name }}</h2>
                <div class="p-4 bg-[#131313]/50 -m-2">
                    <div v-for="(training, trainingIndex) in program.trainings" :key="trainingIndex">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                <img :src="training.exercises[0].icon_url" class="w-6 h-6 mr-2">
                                <p class="inline">{{ training.name }}</p>
                            </div>
                            <p class="inline">{{ training.exercises.length }} exercices</p>
                            <p class="inline">{{ training.exercises.reduce((total, exercise) => total + exercise.sets.length, 0) }} sets</p>
                        </div>
                        <hr v-if="trainingIndex !== program.trainings.length - 1" class="h-px my-8 w-full bg-[#CCCCCC]/75 rounded">
                    </div>
                </div>
                <button class="bg-main_blue px-6 py-2 rounded-xl flex mx-auto mt-5 font-bold">Start Now</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['programs', 'exercises', 'sets', 'trainings'],

    methods: {
        getFirstExerciseIcon(training) {
            // Vérifiez si le training a des exercices
            if (training.exercises.length > 0) {
                // Obtenez l'URL de l'icône du premier exercice
                return training.exercises[0].icon_url;
            }
            // Par défaut, retournez une URL d'icône générique ou vide
            return 'chemin/vers/icone-par-defaut.png';
        }
    }
};
</script>
