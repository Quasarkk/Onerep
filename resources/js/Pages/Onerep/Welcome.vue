<style>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
</style>

<template>
    <ProgramsComponent :programs="ActiveProgram" :exercises="exercises" :sets="sets" :trainings="trainings" />
    <LineComponent/>
    <Navbar/>
</template>

<script>

import ProgramsComponent from '@/Components/Onerep/ProgramsComponent.vue';
import Navbar from '@/Components/Onerep/Navbar.vue';
import LineComponent from '@/Components/Onerep/LineComponent.vue';

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

    computed: {
    ActiveProgram() {
      // Filtrer les programmes avec le statut "active"
      return this.programs.filter((program) => program.status === 'current');
    },
  },

    components: {
        ProgramsComponent, Navbar, LineComponent
    },
};
</script>
