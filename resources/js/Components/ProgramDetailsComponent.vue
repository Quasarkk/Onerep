<style>
  @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
</style>

<template>
    <div class="h-screen bg-background_dark text-text_white">
        <h2 class="text-2xl text-center font-Title"> Cow Boy </h2>
        <h1> {{ program.name }} </h1>
        
    </div>
</template>

<script>
export default {
    props: ['programs', 'exercises', 'sets', 'trainings', 'program'],

    methods: {
    }
};
</script>
