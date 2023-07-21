<style>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
</style>

<template>
    <h2>Welcome</h2>
    <ProgramsComponent :programs="programs" :exercises="exercises" :sets="sets" :trainings="trainings" />
</template>

<script>

import ProgramsComponent from './../Components/ProgramsComponent.vue';

export default {
    props: ['programs', 'exercises', 'sets', 'trainings'],

    methods: {
        getFirstExerciseIcon(training) {
            // Vérifiez si le training a des exercices
            if (training.exercises.length > 0) {
                // Obtenez l'URL de l'icône du premier exercicex
                return training.exercises[0].icon_url;
            }
            // Par défaut, retournez une URL d'icône générique ou vide
            return '/Exercises_icons/benchpress_icon.svg';
        }
    },

    components: {
        ProgramsComponent
    },
};
</script>
