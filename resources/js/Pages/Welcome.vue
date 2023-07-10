<template>
    <div class="h-screen bg-[#141721] text-white">
      <h2 class="text-2xl text-center">Welcome</h2>

      <div class="w-10/12 mx-auto my-8">
        <div v-for="program in programs" class="bg-gradient-to-r from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md">
          <h3 class="text-center text-2xl">{{ program.name }}</h3>
          <p>{{ program.begin_date }}</p>
          <p>{{ program.end_date }}</p>
        </div>

        <div v-for="exercise in exercises">
            <p>{{exercise.name}}</p>
            <p>{{exercise.number}}</p>
            <p>{{exercise.date}}</p>
            <p>{{exercise.muscles}}</p>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    props: ['programs', 'exercises'],
  };
  </script>
